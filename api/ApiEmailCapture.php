<?php
class ApiEmailCapture extends ApiBase {
	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, '' );
	}

	public function execute() {
		$params = $this->extractRequestParams();

		// Validation
		if ( !isset( $params['email'] ) ) {
			$this->dieUsageMsg( array( 'missingparam', 'email' ) );
		} else if ( !User:isValidEmailAddr( $params['email'] ) ) {
			$this->dieUsage( 'The email address does not appear to be valid', 'invalidemail' );
		}

		// Verification code
		$code = md5( 'EmailCapture' . time() . $params['email'] . $params['info'] )

		// Insert
		$dbw = wfGetDB( DB_MASTER );
		$affectedRows = $dbw->insert(
			'email_capture',
			array(
				'ec_email' => $params['email'],
				'ec_info' => isset( $params['info'] ) ? $params['email'] : null,
				'ec_code' => $code,
			)
		);

		// Send auto-response
		global $wgUser, $wgEmailCaptureSendAutoResponse, $wgEmailCaptureAutoResponse;
		$link = $wgUser->getSkin()->link( 'Special:EmailCapture' );
		$fullLink = $wgUser->getSkin()->link(
			'Special:EmailCapture', null, array(), array( 'verify' => $code )
		);
		if ( $wgEmailCaptureSendAutoResponse ) {
			UserMailer::send(
				$params['email'],
				$wgEmailCaptureAutoResponse['from'],
				wfMsg( $wgEmailCaptureAutoResponse['subject-msg'] ),
				wfMsg( $wgEmailCaptureAutoResponse['body-msg'], $link, $code, $fullLink ),
				$wgEmailCaptureAutoResponse['reply-to'],
				$wgEmailCaptureAutoResponse['content-type'],
			);
		}

		// Result
		if ( $affectedRows === 0 ) {
			$r = array( 'result' => 'Failure', 'message' => 'Duplicate email address' );
		} else {
			$r = array( 'result' => 'Success' );
		}
		$this->getResult()->addValue( null, $this->getModuleName(), $r );
	}

	public function getAllowedParams() {
		return array(
			'email' => array(
				ApiBase::PARAM_REQUIRED => true,
				ApiBase::PARAM_TYPE => 'string',
			),
			'info' => array(
				ApiBase::PARAM_TYPE => 'string',
			),
		);
	}

	public function getParamDescription() {
		return array(
			'email' => 'Email address to capture',
			'info' => 'Extra information to log, usually JSON encoded structured information',
		);
	}

	public function getDescription() {
		return array(
			'Capture email addresses'
		);
	}

	public function mustBePosted() {
		return true;
	}

	public function isWriteMode() {
		return true;
	}

	public function getPossibleErrors() {
		return array_merge( parent::getPossibleErrors(), array(
			array( 'missingparam', 'email' ),
			array(
				'code' => 'invalidemail',
				'info' => 'The email address does not appear to be valid'
			),
		) );
	}

	protected function getExamples() {
		return array(
			'api.php?action=emailcapture'
		);
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}
