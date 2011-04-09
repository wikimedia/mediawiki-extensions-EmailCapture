<?php

class SpecialEmailCapture extends SpecialPage {

	public function __construct() {
		parent::__construct( 'EmailCapture', 'emailcapture' );
	}

	public function execute( $par ) {
		global $wgOut, $wgRequest;

		$this->setHeaders();

		$code = $wgRequest->getVal( 'verify' );
		if ( $verify !== null ) {
			$dbw = wfGetDB( DB_MASTER );
			$affectedRows = $dbw->update(
				'email_capture',
				array( 'ec_verified' => 1 ),
				array( 'ec_code' => $code ),
				__METHOD__
			);
			if ( $affectedRows ) {
				$wgOut->addWikiMsg( 'emailcapture-success' );
			} else {
				$wgOut->addWikiMsg( 'emailcapture-failure' );
			}
			// exit
		}
		// Show simple form for submitting verification code
	}
}
