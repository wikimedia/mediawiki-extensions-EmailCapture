<?php
/**
 * EmailCapture extension
 * 
 * @file
 * @ingroup Extensions
 * 
 * @author Trevor Parscal <trevor@wikimedia.org>
 * @license GPL v2 or later
 * @version 0.3.0
 */

/* Configuration */

$wgEmailCaptureSendAutoResponse = true;
$wgEmailCaptureAutoResponse = array(
	'from' => $wgPasswordSender,
	'subject-msg' => 'emailcapture-response-subject',
	'body-msg' => 'emailcapture-response-body',
	'reply-to' => null,
	'content-type' => null,
);

/* Setup */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'EmailCapture',
	'author' => array( 'Trevor Parscal' ),
	'version' => '0.3.0',
	'url' => 'http://www.mediawiki.org/wiki/Extension:EmailCapture',
	'descriptionmsg' => 'emailcapture-desc',
);
$dir = dirname( __FILE__ ) . '/';
$wgExtensionMessagesFiles['EmailCapture'] = $dir . 'EmailCapture.i18n.php';
// API
$wgAutoloadClasses['ApiEmailCapture'] = $dir . 'api/ApiEmailCapture.php';
$wgAPIModules['emailcapture'] = 'ApiEmailCapture';
// Schema
$wgAutoloadClasses['EmailCaptureHooks'] = $dir . 'EmailCaptureHooks.php';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'EmailCaptureHooks::loadExtensionSchemaUpdates';
$wgHooks['ParserTestTables'][] = 'EmailCaptureHooks::parserTestTables';
// SpecialPage
$wgAutoloadClasses['SpecialEmailCapture'] = $dir . "SpecialEmailCapture.php";
$wgSpecialPages['EmailCapture'] = 'SpecialEmailCapture';
