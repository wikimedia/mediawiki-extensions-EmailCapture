<?php
class SpecialEmailCapture extends SpecialPage {

	function __construct() {
		parent::__construct( 'EmailCapture', 'emailcapture' );
	}

	function execute( $par ) {
		global $wgOut, $wgRequest;

		$this->setHeaders();

		$code = $wgRequest->getVal( 'verify' );
		if ( $verify !== null ) {
			// $affectedRows = ( UPDATE email_capture SET (ec_veified = 1) WHERE ec_code = $code )
			// if ( $affectedRows ) {
			//     show success
			// } else {
			//     show failure
			// }
			// exit
		}
		// Show simple form for submitting verification code
	}
}
