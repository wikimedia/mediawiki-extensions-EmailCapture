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
	'emailcapture' => 'E-mail verification',
	'emailcapture-desc' => 'Capture e-mail addresses, and allow users to verify them through e-mail',
	'emailcapture-failure' => "Your e-mail was '''not''' verified.",
	'emailcapture-response-subject' => '{{SITENAME}} e-mail address verification',
	'emailcapture-response-body' => 'Hello!

Thank you for expressing interest in helping to improve {{SITENAME}}.

Please take a moment to confirm your email by clicking on the link below:
$1

You may also visit:
$2

And enter the following confirmation code:
$3

We’ll be in touch shortly with how you can help improve {{SITENAME}}.

If you didn’t initiate this request, please ignore this email and we won’t send you anything else.
',
	'emailcapture-success' => 'Thank you!

Your email has been successfully confirmed.',
	'emailcapture-instructions' => 'To verify your e-mail address, enter the code that was emailed to you and click "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Verification code:',
	'emailcapture-submit' => 'Verify e-mail address',
);

/** Message documentation (Message documentation)
 * @author Kghbln
 * @author Purodha
 */
$messages['qqq'] = array(
	'emailcapture-desc' => '{{desc}}',
	'emailcapture-instructions' => 'Used on [[Special:EmailCapture]], see image.
[[Image:TestWiki-Special-EmailCapture-L4H0.png|Screenshot of Special:EmailCapture|right|thumb]]',
	'emailcapture-verify' => 'Used on [[Special:EmailCapture]], see image.
[[Image:TestWiki-Special-EmailCapture-L4H0.png|Screenshot of Special:EmailCapture|right|thumb]]',
	'emailcapture-submit' => 'Used on [[Special:EmailCapture]], see image.
[[Image:TestWiki-Special-EmailCapture-L4H0.png|Screenshot of Special:EmailCapture|right|thumb]]',
);

/** Arabic (العربية)
 * @author OsamaK
 */
$messages['ar'] = array(
	'emailcapture-verify' => 'رمز التحقق:',
);

/** Belarusian (Taraškievica orthography) (‪Беларуская (тарашкевіца)‬)
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'emailcapture' => 'Праверка электроннай пошты',
	'emailcapture-desc' => 'Перахоплівае адрасы электроннай пошты, і дазваляе ўдзельнікам правяраць іх',
	'emailcapture-failure' => "Ваш адрас электроннай пошты '''ня''' быў правераны.",
	'emailcapture-response-subject' => 'Праверка адрасу электронную пошты для {{GRAMMAR:родны|{{SITENAME}}}}',
	'emailcapture-response-body' => 'Каб праверыць Ваш адрас электроннай пошты, перайдзіце па спасылцы:
$1

Так сама, Вы можаце наведаць:
$2

і увесьці наступны код праверкі:
$3

Дзякуй за праверку Вашага адрасу электроннай пошты.',
	'emailcapture-success' => 'Ваш адрас электроннай пошты быў правераны пасьпяхова.',
	'emailcapture-instructions' => 'Каб праверыць Ваш адрас электроннай пошты, увядзіце код, які быў Вам дасланы па электроннай пошце і націсьніце кнопку «{{int:emailcapture-submit}}».',
	'emailcapture-verify' => 'Код праверкі:',
	'emailcapture-submit' => 'Праверыць адрас электроннай пошты',
);

/** Bengali (বাংলা)
 * @author Wikitanvir
 */
$messages['bn'] = array(
	'emailcapture' => 'ই-মেইল নিশ্চিতকরণ',
	'emailcapture-response-subject' => '{{SITENAME}} সাইটের ই-মেইল ঠিকানা নিশ্চিতকরণ',
	'emailcapture-success' => 'আপনার ই-মেইল ঠিকানা সফলভাবে পরীক্ষিত হয়েছিলো।',
	'emailcapture-verify' => 'নিশ্চিতকরণ কোড:',
	'emailcapture-submit' => 'ই-মেইল ঠিকানা নিশ্চিতকরণ',
);

/** Breton (Brezhoneg)
 * @author Fulup
 */
$messages['br'] = array(
	'emailcapture' => 'Gwiriañ ar postel',
	'emailcapture-desc' => "Pakañ a ra chomlec'hioù postel ha talvezout a ra d'an implijerien da wiriañ anezho dre bostel",
	'emailcapture-failure' => "'''N'eo ket bet''' gwiriekaet ho chomlec'h postel.",
	'emailcapture-response-subject' => "Gwiriadenn chomlec'h postel evit {{SITENAME}}",
	'emailcapture-response-body' => "Gwiriit ho chomlec'h postel en ur heuliañ al liamm-mañ :
$1

Gallout a rit ivez mont da welet :
$2

ha merkañ ar c'hod gwiriekaat-mañ :
$3

Trugarez da lakaat gwiriekaat ho chomlec'h postel.",
	'emailcapture-success' => "Gwiriet eo bet ho chomlec'h postel ervat.",
	'emailcapture-instructions' => "Da wiriañ ho chomlec'h postel, merkit ar c'hod zo bet kaset deoc'h ha klikit war \"{{int:emailcapture-submit}}\".",
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
	'emailcapture-instructions' => 'Um deine E-Mail-Adresse zu bestätigen, gib bitte den Code ein, der dir per E-Mail zuschickt wurde und klicke anschließend auf „{{int:emailcapture-submit}}“.',
	'emailcapture-verify' => 'Bestätigungscode:',
	'emailcapture-submit' => 'E-Mail-Adresse bestätigen',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'emailcapture' => 'Retpoŝta kontrolado',
	'emailcapture-desc' => 'Kapti retpoŝadresojn, kaj permesi al uzantoj kontroli tion per retpoŝto',
	'emailcapture-failure' => "Via retpoŝtadreso '''ne estis''' kontrolita.",
	'emailcapture-response-subject' => '{{SITENAME}} retpoŝta konfirmado',
	'emailcapture-response-body' => 'Kontroli vian retpoŝtadreso klakante la jenan ligilon:
$1

Ankaŭ vi povas viziti:
$2

kaj enigi la jenan kontrolkodon:
$3

Dankon pro kontrolante vian retpoŝtadreson.',
	'emailcapture-success' => 'Via retpoŝtadreso estis sukcese kontrolita.',
	'emailcapture-instructions' => 'Por kontroli vian retpoŝtadreson, enigi la kodo kiu estis retpoŝtita al vi kaj klaku butonon "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Kontrolkodo:',
	'emailcapture-submit' => 'Konfirmi adreson de retpoŝto',
);

/** French (Français)
 * @author IAlex
 * @author Wyz
 */
$messages['fr'] = array(
	'emailcapture' => 'Vérification de courriel',
	'emailcapture-desc' => 'Capture des adresses de courriel et permet aux utilisateurs de les vérifier par courriel',
	'emailcapture-failure' => "Votre adresse de courriel n'a '''pas''' été vérifiée.",
	'emailcapture-response-subject' => "Vérification d'adresse de courriel de {{SITENAME}}",
	'emailcapture-response-body' => 'Vérifiez votre adresse de courriel en suivant le lien suivant :
$1

Vous pouvez aussi visiter :
$2

et entrer le code de vérification suivant :
$3

Merci pour la vérification de votre adresse de courriel.',
	'emailcapture-success' => 'Votre adresse de courriel a été vérifiée avec succès.',
	'emailcapture-instructions' => 'Pour vérifier votre adresse de courriel, entrez le code qui vous a été envoyé par courriel et cliquez sur « {{int:emailcapture-soumettre}} ».',
	'emailcapture-verify' => 'Code de vérification :',
	'emailcapture-submit' => "Vérifier l'adresse de courriel",
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'emailcapture' => 'Contrôlo d’adrèce èlèctronica',
	'emailcapture-failure' => "Voutra adrèce èlèctronica at '''pas''' étâ controlâ.",
	'emailcapture-response-subject' => 'Contrôlo d’adrèce èlèctronica de {{SITENAME}}',
	'emailcapture-verify' => 'Code de contrôlo :',
	'emailcapture-submit' => 'Controlar l’adrèce èlèctronica',
);

/** Galician (Galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'emailcapture' => 'Verificación do correo electrónico',
	'emailcapture-desc' => 'Captura enderezos de correo electrónico e permite aos usuarios comprobalos a través do propio correo electrónico',
	'emailcapture-failure' => "O seu correo electrónico '''non''' foi verificado.",
	'emailcapture-response-subject' => 'Verificación do enderezo de correo electrónico de {{SITENAME}}',
	'emailcapture-response-body' => 'Verifique o seu enderezo de correo electrónico seguindo esta ligazón:
$1

Tamén pode visitar:
$2

e inserir o seguinte código de verificación:
$3

Grazas por verificar o seu enderezo de correo electrónico.',
	'emailcapture-success' => 'O seu enderezo de correo electrónico verificouse correctamente.',
	'emailcapture-instructions' => 'Para verificar o seu enderezo de correo electrónico, introduza o código que se lle enviou e prema en "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Código de verificación:',
	'emailcapture-submit' => 'Verificar o enderezo de correo electrónico',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'emailcapture' => 'לכידת כתובת דואר אלקטרוני',
	'emailcapture-desc' => 'לכידה של כתובת דואר אלקטרוני ואפשרות לאמת את הכתובת דרך דואר אלקטרוני',
	'emailcapture-failure' => "הדואר האלקטרוני שלך היה '''לא''' אומתה.",
	'emailcapture-response-subject' => 'אימות כתובת דואר אלקטרוני באתר {{SITENAME}}',
	'emailcapture-response-body' => 'אמתו את כתובת הדוא האלקטרוני שלכם באמצעות לחיצה על הקישור הבא:
$1

אפשר גם לבקר כאן:
$1

ולהכניס את קוד האימות הבא:
$3

תודה על אימות כתובת הדואר האלקטרוני שלכם.',
	'emailcapture-success' => 'כתובת הדוא״ל שלכם אומתה בהצלחה.',
	'emailcapture-instructions' => 'כדי לאמת את כתובת הדוא״ל שלכם, הכניסו את הקוד שנשלח אליכם ולחצו על "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'קוד אימות:',
	'emailcapture-submit' => 'לאמת כתובת דוא״ל',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'emailcapture-verify' => 'Ellenőrző kód:',
	'emailcapture-submit' => 'E-mail cím megerősítése',
);

/** Interlingua (Interlingua)
 * @author McDutchie
 */
$messages['ia'] = array(
	'emailcapture' => 'Verification de e-mail',
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
	'emailcapture-instructions' => 'Pro verificar tu adresse de e-mail, entra le codice que te esseva inviate in e-mail, e clicca super "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Codice de verification:',
	'emailcapture-submit' => 'Verificar adresse de e-mail',
);

/** Indonesian (Bahasa Indonesia)
 * @author IvanLanin
 */
$messages['id'] = array(
	'emailcapture' => 'Verifikasi surel',
	'emailcapture-desc' => 'Merekam alamat surel dan memungkinkan pengguna untuk melakukan verifikasi melalui surel',
	'emailcapture-failure' => "Surel Anda '''belum'' terverifikasi.",
	'emailcapture-response-subject' => 'Verifikasi alamat surel {{SITENAME}}',
	'emailcapture-response-body' => 'Verifikasi alamat surel Anda dengan mengikuti tautan ini:
$1

Anda juga dapat mengunjungi:
$2

dan memasukkan kode verifikasi berikut:
$3

Terima kasih telah memverifikasi alamat surel Anda.',
	'emailcapture-success' => 'Alamat surel Anda berhasil diverifikasi.',
	'emailcapture-instructions' => 'Untuk memverifikasi alamat surel Anda, masukkan kode yang dikirim melalui surel kepada Anda dan klik "{{int: emailcapture-submit}}".',
	'emailcapture-verify' => 'Kode verifikasi:',
	'emailcapture-submit' => 'Verifikasi alamat surel',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'emailcapture' => 'Adräß för de <i lang="en">e-mail</i> schnappe',
	'emailcapture-desc' => 'Schnabb en Adräß för de <i lang="en">e-mail</i> un lohß de Metmaacher se övver en <i lang="en">e-mail</i> beschtäätejje.',
	'emailcapture-failure' => "Ding <i lang=\"en\">e-mail</i> wood '''nit''' beschtätesch",
	'emailcapture-response-subject' => '{{ucfirst:{{GRAMMAR:Genitiv ier feminine|{{SITENAME}}}}}} Beschtätejung för Adräße vun de <i lang="en">e-mail</i>',
	'emailcapture-response-body' => 'Öm Ding e-mail Adräß ze beschtääteje donn däm Lingk heh follje:
$1

Do kanns och op heh di Sigg jonn:
$2

un dann dä Kood heh enjävve:
$3

Mer bedangke uns för et Beschtäätejje.',
	'emailcapture-success' => 'Ding Adräß för de <i lang="en">e-mail</i> wood beschtäätesch.',
	'emailcapture-instructions' => 'Öm Ding Adräß för de <i lang="en">e-mail</i> ze bschtäätejje, donn onge dä Kood enjävve, dän De jescheck krääje häß, un donn dann op „{{int:emailcapture-submit}}“ klecke.',
	'emailcapture-verify' => 'Dä Kood för et Beschtäätejje:',
	'emailcapture-submit' => 'Lohß jonn!',
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
	'emailcapture-instructions' => 'За да ја потврдите вашата е-пошта, внесете го кодот што ви го испративме и стиснете на „{{int:emailcapture-submit}}“.',
	'emailcapture-verify' => 'Потврден код:',
	'emailcapture-submit' => 'Потврди е-пошта',
);

/** Malayalam (മലയാളം)
 * @author Praveenp
 */
$messages['ml'] = array(
	'emailcapture' => 'ഇമെയിൽ പരിശോധന',
	'emailcapture-desc' => 'ഇമെയിൽ സ്വയം എടുക്കുകയും ഉപയോക്താക്കളെ ഇമെയിൽ ഉപയോഗിച്ച് പരിശോധിക്കുകയും ചെയ്യുന്നു',
	'emailcapture-failure' => "താങ്കളുടെ ഇമെയിൽ വിലാസം '''പരിശോധിച്ചിട്ടില്ല'''.",
	'emailcapture-response-subject' => '{{SITENAME}} സംരംഭത്തിലെ ഇമെയിൽ വിലാസ പരിശോധന',
	'emailcapture-response-body' => 'താഴെ നൽകിയിരിക്കുന്ന കണ്ണി ഉപയോഗിച്ച് താങ്കളുടെ ഇമെയിൽ വിലാസം പരിശോധനയ്ക്കു പാത്രമാക്കുക:
$1

താങ്കൾക്ക് ഇതും സന്ദർശിക്കാവുന്നതാണ്:
$2

എന്നിട്ട് താഴെ കൊടുത്തിരിക്കുന്ന പരിശോധനാ കോഡ് നൽകുക:
$3

താങ്കളുടെ ഇമെയിൽ വിലാസം പരിശോധനയ്ക്ക് പാത്രമാക്കിയതിനു നന്ദി.',
	'emailcapture-success' => 'താങ്കളുടെ ഇമെയിൽ വിലാസം വിജയകരമായി പരിശോധിച്ചിരിക്കുന്നു.',
	'emailcapture-instructions' => 'താങ്കളുടെ ഇമെയിൽ വിലാസം പരിശോധനയ്ക്കു പാത്രമാക്കുവാൻ, താങ്കൾക്ക് ഇമെയിൽ വഴി അയച്ചിട്ടുള്ള കോഡ് നൽകിയ ശേഷം "{{int:emailcapture-submit}}" ഞെക്കുക.',
	'emailcapture-verify' => 'പരിശോധനയ്ക്കുള്ള കോഡ്:',
	'emailcapture-submit' => 'ഇമെയിൽ വിലാസം പരിശോധനയ്ക്ക് പാത്രമാക്കുക',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author Siebrand
 */
$messages['nl'] = array(
	'emailcapture' => 'E-mailadresbevestiging',
	'emailcapture-desc' => 'E-mailadressen bevestigen en stelt gebruikers in staat dit te doen via e-mail',
	'emailcapture-failure' => "Uw e-mailadres is '''niet''' bevestigd.",
	'emailcapture-response-subject' => 'E-mailadrescontrole van {{SITENAME}}',
	'emailcapture-response-body' => 'Volg deze verwijzing om uw e-mailadres te bevestigen:
$1

U kunt ook deze verwijzing volgen:
$2

en daar de volgende bevestigingscode invoeren:
$3

Dank u wel voor het bevestigen van uw e-mailadres.',
	'emailcapture-success' => 'Uw e-mailadres is bevestigd.',
	'emailcapture-instructions' => 'Voer de code uit uw e-mail in om uw e-mailadres te bevestigen en klik daarna op "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Bevestigingscode:',
	'emailcapture-submit' => 'E-mailadres bevestigen',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'emailcapture' => 'Przechowywanie adresów e‐mailowych',
	'emailcapture-desc' => 'Przechowywanie adresów e‐mailowych i umożliwianie użytkownikom sprawdzenie ich poprzez e‐mail',
	'emailcapture-failure' => "Twój adres e‐mailowy '''nie''' został zweryfikowany.",
	'emailcapture-response-subject' => '{{SITENAME}} – weryfikacja adresu e‐mail',
	'emailcapture-response-body' => 'Potwierdź swój adres e‐mailowy klikając na link
$1

Możesz również odwiedzić
$2

i wprowadzić kod weryfikacji
$3

Dziękujemy za potwierdzenie adresu e‐mailowego.',
	'emailcapture-success' => 'Twój adres e‐mailowy został zweryfikowany.',
	'emailcapture-instructions' => 'Jeśli chcesz potwierdzić swój adres poczty elektronicznej, wprowadź poniżej kod, który otrzymałeś e‐mailem i kliknij „{{int:emailcapture-submit}}”.',
	'emailcapture-verify' => 'Kod weryfikacji',
	'emailcapture-submit' => 'Potwierdź adres e‐mailowy',
);

/** Piedmontese (Piemontèis)
 * @author Dragonòt
 */
$messages['pms'] = array(
	'emailcapture' => 'Verìfica ëd corel',
	'emailcapture-desc' => "Ciapa adrëssa ëd corel, e përmëtt a j'utent ëd verifichelo con corel",
	'emailcapture-failure' => "Tò corel a l'é '''pa''' stàit verificà.",
	'emailcapture-response-subject' => "Verìfica dl'adrëssa postal ëd {{SITENAME}}",
	'emailcapture-response-body' => 'Verìfica toa adrëssaq ëd corel andasend daré a sto colegament:
$1

It peule visité:
$2

e anserì ël còdes ëd verìfica si sota:
$3

Mersì për avèj verificà toa adrëssa ëd corel.',
	'emailcapture-success' => "Toa adrëssa ëd corel a l'é stàita verificà da bin.",
	'emailcapture-instructions' => 'Për verifiché toa adrëssa ëd corel, anseriss ë còdes ch\'a l\'é stàte spedì e sgnaca "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Còdes ëd verìfica:',
	'emailcapture-submit' => 'Verìfica adrëssa ëd corel',
);

/** Romanian (Română)
 * @author Firilacroco
 * @author Minisarm
 */
$messages['ro'] = array(
	'emailcapture-verify' => 'Cod de verificare:',
	'emailcapture-submit' => 'Verifică adresa de e-mail',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'emailcapture-failure' => "L'e-mail toje '''non''' g'ha state verificate.",
	'emailcapture-response-subject' => "Verifeche de l'indirizze email pe {{SITENAME}}",
);

/** Russian (Русский)
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'emailcapture' => 'Подтверждение адреса электронной почты',
	'emailcapture-desc' => 'Захват адреса электронной почты, разрешение участникам подтверждать себя по электронной почте',
	'emailcapture-failure' => "Ваш адрес электронной почты '''не''' был подтверждён.",
	'emailcapture-response-subject' => 'Проверка адреса электронной почты {{SITENAME}}',
	'emailcapture-response-body' => 'Подтвердите свой адрес электронной почты, перейдя по ссылке:
$1

Вы также можете зайти на страницу:
$2

и ввести следующий проверочный код:
$3

Спасибо за подтверждение вашего адреса электронной почты.',
	'emailcapture-success' => 'Ваш адрес электронной почты был успешно подтверждён.',
	'emailcapture-instructions' => 'Для подтверждения вашего адреса электронной почты, введите код, который был вам отправлен, и нажмите кнопку «{{int:emailcapture-submit}}».',
	'emailcapture-verify' => 'Код подтверждения:',
	'emailcapture-submit' => 'Подтвердить адрес электронной почты',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'emailcapture' => 'Zachytenie emailovej adresy',
	'emailcapture-desc' => 'Zachytiť emailovú adresu a umožniť používateľom overenie pomocou emailu',
	'emailcapture-failure' => "Váš e-mail '''nebol''' overený.",
	'emailcapture-response-subject' => 'Potvrdenie emailovej adresy pre {{GRAMMAR:akuzatív|{{SITENAME}}}}',
	'emailcapture-response-body' => 'Overiť svoju emailovú adresu nasledovaním tohto odkazu:

$1

Môžete tiež navštíviť:
$2

a zadať nasledovný overovací kód:
$3

Ďakujeme za overenie vašej emailovej adresy.',
	'emailcapture-success' => 'Vaša emailová adresa bola úspešne overená.',
	'emailcapture-instructions' => 'Ak chcete overiť svoju emailovú adresu, zadajte kód, ktorý vám bol zaslaný emailom a kliknite na „{{int:emailcapture-submit}}“.',
	'emailcapture-verify' => 'Overovací kód:',
	'emailcapture-submit' => 'Overiť e-mailovú adresu',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 */
$messages['sl'] = array(
	'emailcapture' => 'Preverjanje e-pošte',
	'emailcapture-desc' => 'Zajame e-poštne naslove in omogoča uporabnikom, da jih preverijo preko e-pošte',
	'emailcapture-failure' => "Vaš e-poštni naslov '''ni''' bil preverjen.",
	'emailcapture-response-subject' => 'Preverjanje e-poštnega naslova {{SITENAME}}',
	'emailcapture-response-body' => 'Preverite svoj e-poštni naslov z obiskom te povezave:
$1

Obiščete lahko tudi:
$2

in vnesete naslednjo kodo za preverjanje:
$3

Zahvaljujemo se vam za preverjanje vašega e-poštnega naslova.',
	'emailcapture-success' => 'Vaš e-poštni naslov je bil uspešno preverjen.',
	'emailcapture-instructions' => 'Da preverite vaš e-poštni naslov, vnesite kodo, ki ste jo prejeli po e-pošti, in kliknite »{{int:emailcapture-submit}}«.',
	'emailcapture-verify' => 'Koda za preverjanje:',
	'emailcapture-submit' => 'Preveri e-poštni naslov',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Veeven
 */
$messages['te'] = array(
	'emailcapture' => 'ఈమెయిలు ధృవీకరణ',
	'emailcapture-desc' => 'ఈమెయిలు అడ్రసుల్ని సేకరించి, వాడుకరులు వాటిని ఈమెయిలు ద్వారా ధృవీకరించే వీలు కల్పించు',
	'emailcapture-failure' => 'మీ ఈమెయిలు ధృవీకరణ ’’’కాలేదు’’’.',
	'emailcapture-response-subject' => '{{SITENAME}} ఈ-మెయిలు చిరునామా తనిఖీ',
	'emailcapture-response-body' => 'కింది లింకుకు వెళ్ళి మీ ఈమెయిలు అడ్రసును ధృవీకరించండి:
$1

లేదా మీరు కింది లింకుకు వెళ్ళి:
$2

కింది ధృవీకరణ కోడును ఇవ్వవచ్చు:
$3

మీ ఈమెయిలు అడ్రసును ధృవీకరించినందుకు నెనరులు.',
	'emailcapture-success' => 'మీ ఈ-మెయిలు చిరునామాను విజయవంతంగా తనిఖీచేసాం.',
	'emailcapture-instructions' => 'మీ ఈమెయిలు అడ్రసును ధృవీకరించేందుకు, మీ ఈమెయిలైడీకి పంపించిన కోడును ఇచ్చి, "{{int:emailcapture-submit}}" ను నొక్కండి.',
	'emailcapture-verify' => 'తనిఖీ సంకేతం:',
	'emailcapture-submit' => 'ఈమెయిలు అడ్రసును ధృవీకరించు',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 */
$messages['tl'] = array(
	'emailcapture' => 'Pagpapatunay ng e-liham',
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
	'emailcapture-instructions' => 'Upang mapatunayan ang tirahan mo ng e-liham, ipasok ang kodigong ipinadala sa iyo sa pamamagitan ng e-liham at pindutin ang "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Kodigo ng pagpapatotoo:',
	'emailcapture-submit' => 'Patunayan ang tirahan ng e-liham',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'emailcapture' => 'Xác minh địa chỉ thư điện tử',
	'emailcapture-desc' => 'Bắt các địa chỉ thư điện tử và cho phép người dùng xác minh chúng qua thư điện tử',
	'emailcapture-failure' => "Địa chỉ thư điện tử của bạn '''chưa''' được xác minh.",
	'emailcapture-response-subject' => 'Xác minh địa chỉ thư điện tử tại {{SITENAME}}',
	'emailcapture-response-body' => 'Xin vui lòng xác nhận địa chỉ thư điện tử của bạn qua liên kết này:
$1

Bạn cũng có thể ghé thăm:
$2

và nhập mã xác minh sau:
$3

Cám ơn bạn xác minh địa chỉ thư điện tử của bạn.',
	'emailcapture-success' => 'Địa chỉ thư điện tử của bạn đã được xác minh thành công.',
	'emailcapture-instructions' => 'Để xác minh địa chỉ thư điện tử của bạn, hãy nhập mã trong thư điện tử đã được gửi cho bạn và bấm nút “{{int:emailcapture-submit}}”.',
	'emailcapture-verify' => 'Mã xác minh:',
	'emailcapture-submit' => 'Xác minh địa chỉ thư điện tử',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 * @author 阿pp
 */
$messages['zh-hans'] = array(
	'emailcapture' => '电子邮件地址的捕获',
	'emailcapture-desc' => '捕获电子邮件地址，并允许用户通过电子邮件确认他们',
	'emailcapture-failure' => "您的电子邮件'''不'''是已验证。",
	'emailcapture-response-subject' => '{{SITENAME}}邮箱地址确认',
	'emailcapture-response-body' => '通过此链接验证邮箱地址：
$1

或者也可以访问：
$2

并输入以下验证码：
$3

感谢您验证邮箱地址。',
	'emailcapture-success' => '您的电子邮件地址被成功验证。',
	'emailcapture-instructions' => '输入邮件的标明的验证码并点击"{{int:emailcapture-submit}}"以验证您的邮箱地址。',
	'emailcapture-verify' => '验证码：',
	'emailcapture-submit' => '验证电子邮件地址',
);

