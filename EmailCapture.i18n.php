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
	'emailcapture' => 'E-mail address capture',
	'emailcapture-desc' => 'Capture e-mail addresses, and allow users to verify them through e-mail',
	'emailcapture-failure' => "Your e-mail was '''not''' verified.",
	'emailcapture-response-subject' => '{{SITENAME}} e-mail address verification',
	'emailcapture-response-body' => 'Verify your e-mail address by following this link:
$1

You can also visit:
$2

and enter the following verification code:
$3

Thank you for verifying your e-mail address.',
	'emailcapture-success' => 'Your e-mail address was successfully verified.',
	'emailcapture-instructions' => 'To verify your e-mail address, enter the code that was emailed to you and click "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Verification code:',
	'emailcapture-submit' => 'Verify e-mail address',
);

/** Message documentation (Message documentation)
 * @author Kghbln
 */
$messages['qqq'] = array(
	'emailcapture-instructions' => '"verify" should be identical to {{msg-mw|MediaWiki:Emailcapture-submit/de}} [[MediaWiki:Emailcapture-submit|Emailcapture-submit]]',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'emailcapture' => 'Увод адрасу электроннай пошты',
	'emailcapture-desc' => 'Увядзіце адрас электроннай пошты, і перайдзіце да ўдзельніка каб вэрыфікаваць яго праз электронную пошту',
	'emailcapture-failure' => "Ваш адрас электроннай пошты '''ня''' быў вэрыфікаваны.",
	'emailcapture-response-subject' => '{{SITENAME}} Вэрыфікацыя праз электронную пошту',
	'emailcapture-response-body' => 'Каб вырэфікаваць Ваш адрас электроннай пошты, перайдзіце па спасылцы:
	$1

Так сама, Вы можаце наведаць:
	$2
і увесьці наступны код вэрыфікацыі:
	$3

Дзякуй за вэрыфікацыю адрасу Вашай электроннай пошты.',
	'emailcapture-success' => 'Ваш адрас электроннай пошты быў вэрыфікаваны.',
	'emailcapture-instructions' => 'Каб вэрыфікаваць адрас Вашай электроннай пошты, увядзіце код, які быў Вам дасланы па электроннай пошце і націсьніце кнопку «Вэрыфікаваць».',
	'emailcapture-verify' => 'Код вэрыфікацыі:',
	'emailcapture-submit' => 'Вэрыфікаваць адрас электроннай пошты',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'emailcapture-failure' => "'''N'eo ket bet''' gwiriekaet ho chomlec'h postel.",
	'emailcapture-success' => "Gwiriet eo bet ho chomlec'h postel ervat.",
	'emailcapture-verify' => 'Kod gwiriekaat :',
	'emailcapture-submit' => "Gwiriekaat ar chomlec'h postel",
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

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'emailcapture' => 'Captura de adresses de e-mail',
	'emailcapture-desc' => 'Capturar adresses de e-mail, e permitter al usatores de verificar los per e-mail',
	'emailcapture-failure' => "Tu adresse de e-mail '''non''' ha essite verificate.",
	'emailcapture-response-subject' => 'Verification del adresse de e-mail pro {{SITENAME}}',
	'emailcapture-response-body' => 'Pro verificar tu adresse de e-mail, seque iste ligamine:
$1

Alternativemente visita:
$2

e entra le codice de verification sequente:
$3

Gratias pro verificar tu adresse de e-mail.',
	'emailcapture-success' => 'Tu adresse de e-mail ha essite verificate con successo.',
	'emailcapture-instructions' => 'Pro verificar tu adresse de e-mail, entra le codice que te esseva inviate in e-mail, e clicca super "Verificar".',
	'emailcapture-verify' => 'Codice de verification:',
	'emailcapture-submit' => 'Verificar adresse de e-mail',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'emailcapture-failure' => "Är E-Mail konnt '''net''' confirméiert ginn.",
	'emailcapture-submit' => 'E-Mail-Adress iwwerpréifen',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'emailcapture' => 'Потврда на е-пошта',
	'emailcapture-desc' => 'Заведување на е-поштенски адреси што корисниците можат да ги потврдат преку порака',
	'emailcapture-failure' => "Вашата е-пошта '''не''' е потврдена.",
	'emailcapture-response-subject' => '{{SITENAME}} — Потврда на е-пошта',
	'emailcapture-response-body' => 'За да ја потврдите вашата е-пошта, проследете ја следнава врска:
	$1

Или посетете ја страницава:
	$2
и внесете го следниов потврден код:
	$3

Ви благодариме што ја потврдивте вашата адреса.',
	'emailcapture-success' => 'Вашата е-пошта е успешно потврдена.',
	'emailcapture-instructions' => 'За да ја потврдите вашата е-пошта, внесете го кодот што ви го испративме и стиснете на „Потврди“.',
	'emailcapture-verify' => 'Потврден код:',
	'emailcapture-submit' => 'Потврди е-пошта',
);

/** Telugu (తెలుగు)
 * @author Veeven
 */
$messages['te'] = array(
	'emailcapture-response-subject' => '{{SITENAME}} ఈ-మెయిలు చిరునామా తనిఖీ',
	'emailcapture-success' => 'మీ ఈ-మెయిలు చిరునామాను విజయవంతంగా తనిఖీచేసాం.',
	'emailcapture-verify' => 'తనిఖీ సంకేతం:',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'emailcapture' => 'Pagdakip ng E-liham',
	'emailcapture-desc' => 'Hulihin ang mga tirahan ng e-liham, at payagan ang mga tagagamit na patunayan sila sa pamamagitan ng e-liham',
	'emailcapture-failure' => "'''Hindi''' pa napapatunayan ang e-liham mo.",
	'emailcapture-response-subject' => 'Pagpapatunay ng E-liham ng {{SITENAME}}',
	'emailcapture-response-body' => 'Upang mapatunayang ang tirahan mo ng e-liham, sundan ang kawing na ito:
$1

Maaari mo ring dalawin ang:
$2
at ipasok ang sumusundo na kodigo ng pagpapatunay:
$3

Salamat sa pagpapatotoo ng tirahan mo ng e-liham.',
	'emailcapture-success' => 'Matagumpay na napatunayan ang e-liham mo.',
	'emailcapture-instructions' => 'Upang patunayang ang tirahan mo ng e-liham, ipasok ang kodigong ipinadala sa iyo sa e-liham at pindutin ang patunayan.',
	'emailcapture-verify' => 'Kodigo ng pagpapatotoo:',
	'emailcapture-submit' => 'Patunayan ang tirahan ng e-liham',
);

