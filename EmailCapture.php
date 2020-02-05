<?php
/**
 * EmailCapture extension
 *
 * @file
 * @ingroup Extensions
 * @author Trevor Parscal <trevor@wikimedia.org>
 * @license GPL v2 or later
 * @link https://www.mediawiki.org/wiki/Extension:EmailCapture Documentation
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( "This is not a valid entry point to MediaWiki.\n" );
}

/* Configuration */
$wgEmailCaptureSendAutoResponse = true;
$wgEmailCaptureAutoResponse = array(
	'from' => $wgPasswordSender,
	'from-name' => $wgSitename,
	'subject-msg' => 'emailcapture-response-subject',
	'body-msg' => 'emailcapture-response-body',
	'reply-to' => null,
	'content-type' => null,
);

// Extension credits that will show up on Special:Version
$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'EmailCapture',
	'author' => 'Trevor Parscal',
	'version' => '0.4.0',
	'url' => 'https://www.mediawiki.org/wiki/Extension:EmailCapture',
	'descriptionmsg' => 'emailcapture-desc',
);

/* Setup */
$dir = __DIR__ . '/';
$wgMessagesDirs['EmailCapture'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['EmailCaptureAlias'] = $dir . 'EmailCapture.alias.php';
// API
$wgAutoloadClasses['ApiEmailCapture'] = $dir . 'includes/api/ApiEmailCapture.php';
$wgAPIModules['emailcapture'] = 'ApiEmailCapture';
// Schema
$wgAutoloadClasses['EmailCaptureHooks'] = $dir . 'includes/EmailCaptureHooks.php';
$wgHooks['LoadExtensionSchemaUpdates'][] = 'EmailCaptureHooks::loadExtensionSchemaUpdates';
$wgHooks['ParserTestTables'][] = 'EmailCaptureHooks::parserTestTables';
// Special page
$wgAutoloadClasses['SpecialEmailCapture'] = $dir . 'includes/specials/SpecialEmailCapture.php';
$wgSpecialPages['EmailCapture'] = 'SpecialEmailCapture';
