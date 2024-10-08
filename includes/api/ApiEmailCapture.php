<?php

use MediaWiki\MediaWikiServices;

class ApiEmailCapture extends ApiBase {
	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, '' );
	}

	public function execute() {
		$params = $this->extractRequestParams();

		// Validation
		if ( !Sanitizer::validateEmail( $params['email'] ) ) {
			$this->dieWithError( 'The email address does not appear to be valid', 'invalidemail' );
		}

		// Verification code
		$code = md5( 'EmailCapture' . time() . $params['email'] . $params['info'] );

		// Insert
		$dbw = MediaWikiServices::getInstance()->getDBLoadBalancer()->getConnection( DB_PRIMARY );
		$dbw->insert(
			'email_capture',
			[
				'ec_email' => $params['email'],
				'ec_info' => isset( $params['info'] ) ? $params['info'] : null,
				'ec_code' => $code,
			],
			__METHOD__,
			 [ 'IGNORE' ]
		);

		if ( $dbw->affectedRows() ) {
			// Send auto-response
			global $wgEmailCaptureSendAutoResponse, $wgEmailCaptureAutoResponse;
			$title = SpecialPage::getTitleFor( 'EmailCapture' );
			$link = $title->getCanonicalURL();
			$fullLink = $title->getCanonicalURL( [ 'verify' => $code ] );
			if ( $wgEmailCaptureSendAutoResponse ) {
				UserMailer::send(
					new MailAddress( $params['email'] ),
					new MailAddress(
						$wgEmailCaptureAutoResponse['from'],
						$wgEmailCaptureAutoResponse['from-name']
					),
					$this->msg( $wgEmailCaptureAutoResponse['subject-msg'] )->text(),
					$this->msg( $wgEmailCaptureAutoResponse['body-msg'], $fullLink, $link, $code )->text(),
					[
						'replyTo' => $wgEmailCaptureAutoResponse['reply-to'],
						'contentType' => $wgEmailCaptureAutoResponse['content-type']
					]
				);
			}
			$r = [ 'result' => 'Success' ];
		} else {
			$r = [ 'result' => 'Failure', 'message' => 'Duplicate email address' ];
		}
		$this->getResult()->addValue( null, $this->getModuleName(), $r );
	}

	public function getAllowedParams() {
		return [
			'email' => [
				ApiBase::PARAM_REQUIRED => true,
				ApiBase::PARAM_TYPE => 'string',
			],
			'info' => [
				ApiBase::PARAM_TYPE => 'string',
			],
		];
	}

	public function getParamDescription() {
		return [
			'email' => 'Email address to capture',
			'info' => 'Extra information to log, usually JSON encoded structured information',
		];
	}

	public function getDescription() {
		return [
			'Capture email addresses'
		];
	}

	public function mustBePosted() {
		return true;
	}

	public function isWriteMode() {
		return true;
	}

	public function getExamples() {
		return [
			'api.php?action=emailcapture'
		];
	}
}
