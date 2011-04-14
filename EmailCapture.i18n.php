<?php
/**
 * Internationalisation file for EmailCapture extension.
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Trevor Parscal
 */
$messages['en'] = array(
	'emailcapture' => 'E-mail Capture',
	'emailcapture-desc' => 'Capture e-mail addresses, and allow users to verify them through e-mail',
	'emailcapture-failure' => "Your e-mail was '''not''' verified.",
	'emailcapture-response-subject' => '{{SITENAME}} E-mail Verification',
	'emailcapture-response-body' => 'To verify your e-mail address, following this link:
	$1

You can also visit:
	$2
and enter the following verification code:
	$3

Thank you for verifying your e-mail address.',
	'emailcapture-success' => 'Your e-mail was successfully verified.',
	'emailcapture-instructions' => 'To verify your e-mail address, enter the code that was emailed to you and click verify.',
	'emailcapture-verify' => 'Verification code:',
	'emailcapture-submit' => 'Verify e-mail address',
);

