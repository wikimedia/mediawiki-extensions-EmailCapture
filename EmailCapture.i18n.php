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
	'emailcapture' => 'Email Capture',
	'emailcapture-desc' => 'Capture email addresses, and allow users to verify them through email',
	'emailcapture-failure' => "Your email was '''not''' verified.",
	'emailcapture-response-subject' => '{{SITENAME}} Email Verification',
	'emailcapture-response-body' => 'To verify your email address, following this link:
	$1

You can also visit:
	$2
and enter the following verification code:
	$3

Thank you for verifying your email address.',
	'emailcapture-success' => 'Your email was successfully verified.',
);
