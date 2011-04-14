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

/** Message documentation (Message documentation)
 * @author Kghbln
 */
$messages['qqq'] = array(
	'emailcapture-instructions' => '"verify" should be identical to {{msg-mw|MediaWiki:Emailcapture-submit/de}} [[MediaWiki:Emailcapture-submit|Emailcapture-submit]]',
);

/** German (Deutsch)
 * @author Kghbln
 */
$messages['de'] = array(
	'emailcapture' => 'E-Mail-Bestätigung',
	'emailcapture-desc' => 'Ermöglicht das automatische Aufgreifen von E-Mail-Adressen und deren Bestätigung durch deren Benutzer per E-Mail',
	'emailcapture-failure' => "Deine E-Mail-Adresse wurde '''nicht''' bestätigt.",
	'emailcapture-response-subject' => '{{SITENAME}} E-Mail-Bestätigung',
	'emailcapture-response-body' => 'Um deine E-Mail-Adresse zu bestätigen, klicke bitte auf den folgenden Link:
$1

Du kannst ebenso
$2
besuchen und den folgenden Bestätigungscode angeben:
$3

Vielen Dank für das Bestätigen deiner E-Mail-Adresse.',
	'emailcapture-success' => 'Deine E-Mail-Adresse wurde erfolgreich bestätigt.',
	'emailcapture-instructions' => 'Um deine E-Mail-Adresse zu bestätigen, gib bitte den Code ein, der dir per E-Mail zuschickt wurde und klicke anschließend auf „E-Mail-Adresse bestätigen“.',
	'emailcapture-verify' => 'Bestätigungscode:',
	'emailcapture-submit' => 'E-Mail-Adresse bestätigen',
);

