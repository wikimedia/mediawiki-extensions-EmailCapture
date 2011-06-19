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

Please take a moment to confirm your e-mail by clicking on the link below:
$1

You may also visit:
$2

And enter the following confirmation code:
$3

We’ll be in touch shortly with how you can help improve {{SITENAME}}.

If you didn’t initiate this request, please ignore this e-mail and we won’t send you anything else.
',
	'emailcapture-success' => 'Thank you!

Your e-mail has been successfully confirmed.',
	'emailcapture-instructions' => 'To verify your e-mail address, enter the code that was e-mailed to you and click "{{int:emailcapture-submit}}".',
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
	'emailcapture-response-body' => 'Вітаем!

Дзякуй, за дапамогу ў паляпшэньні {{GRAMMAR:родны|{{SITENAME}}}}.

Калі ласка, знайдзіце час каб пацьвердзіць Ваш адрас электроннай пошты. Перайдзіце па спасылцы пададзенай ніжэй: 

$1

Таксама, Вы можаце наведаць:

$2

І увесьці наступны код пацьверджаньня:

$3

Хутка мы перададзім Вам інфармацыю, як Вы можаце дапамагчы ў паляпшэньні {{GRAMMAR:родны|{{SITENAME}}}}.

Калі Вы не дасылалі гэты запыт, калі ласка, праігнаруйце гэты ліст, і мы больш не будзем Вас турбаваць.',
	'emailcapture-success' => 'Дзякуем!

Ваш адрас электроннай пошты быў правераны пасьпяхова.',
	'emailcapture-instructions' => 'Каб праверыць Ваш адрас электроннай пошты, увядзіце код, які быў Вам дасланы па электроннай пошце і націсьніце кнопку «{{int:emailcapture-submit}}».',
	'emailcapture-verify' => 'Код праверкі:',
	'emailcapture-submit' => 'Праверыць адрас электроннай пошты',
);

/** Bulgarian (Български)
 * @author DCLXVI
 */
$messages['bg'] = array(
	'emailcapture-success' => 'Благодарности!

Адресът за електронна поща беше потвърден успешно.',
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
	'emailcapture-response-body' => "Demat deoc'h !

Trugarez deoc'h da vezañ diskouezet bezañ dedennet d'hor skoazellañ evit gwellaat {{SITENAME}}.

Kemerit ur pennadig amzer evit kadarnaat ho chomlec'h postel en ur glikañ war al liamm a-is : 
$1

Gallout a rit ivez mont da welet :
$2

Ha merkañ ar c'hod kadarnaat da-heul :
$3

A-barzh pell ez aimp e darempred ganeoc'h evit ho skoazellañ da wellaat {{SITENAME}}.

Ma n'eo ket deuet ar goulenn ganeoc'h, na rit ket van ouzh ar postel-mañ, ne vo ket kaset mann ebet all deoc'h.",
	'emailcapture-success' => "Trugarez deoc'h !

Gwiriet eo bet ho chomlec'h postel ervat.",
	'emailcapture-instructions' => "Da wiriañ ho chomlec'h postel, merkit ar c'hod zo bet kaset deoc'h ha klikit war \"{{int:emailcapture-submit}}\".",
	'emailcapture-verify' => 'Kod gwiriekaat :',
	'emailcapture-submit' => "Gwiriekaat ar chomlec'h postel",
);

/** Bosnian (Bosanski)
 * @author CERminator
 */
$messages['bs'] = array(
	'emailcapture' => 'Potvrda putem e-maila',
	'emailcapture-failure' => "Vaš e-mail '''nije''' potvrđen.",
	'emailcapture-success' => 'Hvala vam!

Vaš e-mail je uspješno potvrđen.',
);

/** Czech (Česky)
 * @author Mormegil
 */
$messages['cs'] = array(
	'emailcapture' => 'Ověření e-mailu',
	'emailcapture-desc' => 'Uchovává e-mailové adresy a umožňuje uživatelům jejich ověření pomocí e-mailu',
	'emailcapture-failure' => "Váš e-mail '''nebyl''' ověřen.",
	'emailcapture-response-subject' => 'Potvrzení e-mailové adresy pro {{grammar:4sg|{{SITENAME}}}}',
	'emailcapture-response-body' => 'Dobrý den!

Děkujeme za vyjádření zájmu pomoci vylepšit {{grammar:4sg|{{SITENAME}}}}.

Věnujte prosím chvilku potvrzení vaší e-mailové adresy kliknutím na následující odkaz:
$1

Také můžete navštívit:
$2

A zadat následující potvrzovací kód:
$3

Brzy se vám ozveme s informacemi, jak můžete pomoci {{grammar:4sg|{{SITENAME}}}} vylepšit.

Pokud tato žádost nepochází od vás, ignorujte prosím tento e-mail, nic dalšího vám posílat nebudeme.',
	'emailcapture-success' => 'Děkujeme!

Váš e-mail byl úspěšně potvrzen.',
	'emailcapture-instructions' => 'Abyste ověřili svou e-mailovou adresu, zadejte kód, který vám přišel e-mailem, a klikněte na „{{int:emailcapture-submit}}“.',
	'emailcapture-verify' => 'Ověřovací kód:',
	'emailcapture-submit' => 'Ověřit e-mailovou adresu',
);

/** German (Deutsch)
 * @author Kghbln
 * @author MF-Warburg
 * @author Metalhead64
 */
$messages['de'] = array(
	'emailcapture' => 'E-Mail-Bestätigung',
	'emailcapture-desc' => 'Ermöglicht das automatische Aufgreifen von E-Mail-Adressen und deren Bestätigung durch deren Benutzer per E-Mail',
	'emailcapture-failure' => "Deine E-Mail-Adresse wurde '''nicht''' bestätigt.",
	'emailcapture-response-subject' => '{{SITENAME}} E-Mail-Bestätigung',
	'emailcapture-response-body' => 'Hallo!

Vielen Dank für dein Interesse an der Verbesserung von {{SITENAME}}.

Bitte nimm dir einen Moment Zeit, deine E-Mail-Adresse zu bestätigen, indem du auf den folgenden Link klickst:
$1

Du kannst auch die folgende Seite besuchen:
$2

Gib dort den nachfolgenden Bestätigungscode ein:
$3

Wir melden uns in Kürze dazu, wie du helfen kannst, {{SITENAME}} zu verbessern.

Sofern du diese Anfrage nicht ausgelöst hast, ignoriere einfach diese E-Mail. Wir werden dir dann nichts mehr zusenden.',
	'emailcapture-success' => 'Vielen Dank!

Deine E-Mail-Adresse wurde erfolgreich bestätigt.',
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

/** Spanish (Español)
 * @author Fitoschido
 */
$messages['es'] = array(
	'emailcapture' => 'Verificación de correo electrónico',
);

/** French (Français)
 * @author IAlex
 * @author Sherbrooke
 * @author Wyz
 */
$messages['fr'] = array(
	'emailcapture' => 'Vérification de courriel',
	'emailcapture-desc' => 'Capture des adresses de courriel et permet aux utilisateurs de les vérifier par courriel',
	'emailcapture-failure' => "Votre adresse de courriel n'a '''pas''' été vérifiée.",
	'emailcapture-response-subject' => "Vérification d'adresse de courriel de {{SITENAME}}",
	'emailcapture-response-body' => "Bonjour,

Merci de démontrer votre intérêt à améliorer {{SITENAME}}.

Vérifiez votre adresse de courriel en suivant le lien suivant :
$1

Vous pouvez aussi visiter :
$2

et entrer le code de vérification suivant :
$3

Nous vous contacterons bientôt pour savoir comment vous pouvez aider à améliorer {{SITENAME}}.

Si vous n'avez pas initié cette requête, prière d'ignorer ce courriel et nous ne vous enverrons plus rien d'autre.",
	'emailcapture-success' => 'Merci !

Votre adresse de courriel a été vérifiée avec succès.',
	'emailcapture-instructions' => 'Pour vérifier votre adresse de courriel, entrez le code qui vous a été envoyé par courriel et cliquez sur « {{int:emailcapture-soumettre}} ».',
	'emailcapture-verify' => 'Code de vérification :',
	'emailcapture-submit' => "Vérifiez l'adresse de courriel",
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
	'emailcapture-response-body' => 'Ola!

Grazas por expresar interese en axudar a mellorar {{SITENAME}}.

Tome un momento para confirmar o seu correo electrónico premendo na ligazón que hai a continuación: 
$1

Tamén pode visitar:
$2

E inserir o seguinte código de confirmación:
$3

Poñerémonos en contacto con vostede para informarlle sobre como axudar a mellorar {{SITENAME}}.

Se vostede non fixo esta petición, ignore esta mensaxe e non lle enviaremos máis nada.',
	'emailcapture-success' => 'Grazas!

O seu enderezo de correo electrónico verificouse correctamente.',
	'emailcapture-instructions' => 'Para verificar o seu enderezo de correo electrónico, introduza o código que se lle enviou e prema en "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Código de verificación:',
	'emailcapture-submit' => 'Verificar o enderezo de correo electrónico',
);

/** Hebrew (עברית)
 * @author Amire80
 */
$messages['he'] = array(
	'emailcapture' => 'אימות כתובת דואר אלקטרוני',
	'emailcapture-desc' => 'לכידה של כתובת דואר אלקטרוני ואפשרות לאמת את הכתובת דרך דואר אלקטרוני',
	'emailcapture-failure' => "הדואר האלקטרוני שלך היה '''לא''' אומתה.",
	'emailcapture-response-subject' => 'אימות כתובת דואר אלקטרוני באתר {{SITENAME}}',
	'emailcapture-response-body' => 'שלום!

תודה על הבעת העניין בעזרה לאתר {{SITENAME}}.

אנא הקדישו דקה לאימות הדואר האלקטרוני שלכם באמצעות לחיצה על הקישור הבא:
$1

אפשר גם לבקר כאן:
$2

ולהכניס את קוד האימות הבא:
$3

אנחנו ניצור אתכם קשר עם מידע על הדרכים שבהן תוכלו לעזור לשפר את אתר {{SITENAME}}.

אם לא שלחתם את הבקשה הזאת, התעלמו מהמכתב הזה ולא נשלח להם עוד שום דבר.',
	'emailcapture-success' => 'תודה!

כתובת הדוא״ל שלכם אומתה בהצלחה.',
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
	'emailcapture-response-body' => 'Salute!

Gratias pro haber interesse in adjutar a meliorar {{SITENAME}}.

Per favor prende un momento pro confirmar tu adresse de e-mail, con un clic super le ligamine sequente:
$1

Alternativemente, visita:
$2

...e entra le codice de confirmation sequente:
$3

Nos va tosto contactar te pro explicar como tu pote adjutar a meliorar {{SITENAME}}.

Si tu non ha initiate iste requesta, per favor ignora iste e-mail e nos non te inviara altere cosa.',
	'emailcapture-success' => 'Gratias!

Tu adresse de e-mail ha essite confirmate con successo.',
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
	'emailcapture-response-body' => 'Halo!

Terima kasih Anda telah menyatakan minat untuk membantu penyempurnaan {{SITENAME}}.

Harap luangkan waktu sejenak untuk memverifikasikan alamat surel Anda dengan mengikuti tautan berikut:
$1

Anda juga dapat mengunjungi:
$2

dan memasukkan kode verifikasi berikut:
$3

Kami akan segera menghubungi Anda untuk memberi tahu cara membantu menyempurnakan {{SITENAME}}.

Jika Anda merasa tidak mengirim permintaan ini, harap abaikan saja surel ini dan kami tidak akan lagi mengirimkan apa pun kepada Anda.',
	'emailcapture-success' => 'Terima kasih!

Alamat surel Anda berhasil diverifikasi.',
	'emailcapture-instructions' => 'Untuk memverifikasi alamat surel Anda, masukkan kode yang dikirim melalui surel kepada Anda dan klik "{{int: emailcapture-submit}}".',
	'emailcapture-verify' => 'Kode verifikasi:',
	'emailcapture-submit' => 'Verifikasi alamat surel',
);

/** Colognian (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'emailcapture' => 'Adräß för de <i lang="en">e-mail</i> schnappe un prööve',
	'emailcapture-desc' => 'Schnabb en Adräß för de <i lang="en">e-mail</i> un lohß de Metmaacher se övver en <i lang="en">e-mail</i> beschtäätejje.',
	'emailcapture-failure' => "Ding <i lang=\"en\">e-mail</i> wood '''nit''' beschtätesch",
	'emailcapture-response-subject' => '{{ucfirst:{{GRAMMAR:Genitiv ier feminine|{{SITENAME}}}}}} Beschtätejung för Adräße vun de <i lang="en">e-mail</i>',
	'emailcapture-response-body' => 'Mer bedangke uns för Ding Enträße, {{GRAMMAR:Akkusativ|{{SITENAME}}}} bäßer ze maache.

Nemm Der ene Momang, öm Ding e-mail Adräß ze beschtääteje, un donn däm Lingk heh follje:
$1

Do kanns och op heh di Sigg jonn:
$2

un dann dä Kood heh enjävve:
$3

Mer mälde ons bahl bei Der, wi de met {{GRAMMAR:Dativ|{{SITENAME}}}} hälfe kanns.

Wann De dat heh sällver nit aanjschtüße häs, donn nix, un mer don Der och nix mieh schecke.

Ene schööne Jrohß!',
	'emailcapture-success' => 'Ene schönne Dank!

Ding Adräß för de <i lang="en">e-mail</i> wood beschtäätesch.',
	'emailcapture-instructions' => 'Öm Ding Adräß för de <i lang="en">e-mail</i> ze bschtäätejje, donn onge dä Kood enjävve, dän De jescheck krääje häß, un donn dann op „{{int:emailcapture-submit}}“ klecke.',
	'emailcapture-verify' => 'Dä Kood för et Beschtäätejje:',
	'emailcapture-submit' => 'Lohß jonn!',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'emailcapture' => 'E-Mail-Iwwerpréifung',
	'emailcapture-failure' => "Är E-Mail konnt '''net''' confirméiert ginn.",
	'emailcapture-success' => 'Merci!

Är E-Mailadress konnt confirméiert ginn.',
	'emailcapture-verify' => 'Iwwerpréifungs-Code:',
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
	'emailcapture-response-body' => 'Здраво!

Ви благодариме што изразивте интерес да помогнете во развојот на {{SITENAME}}.

Потврдете ја вашата е-пошта на следнава врска: 

$1

Можете да ја посетите и страницата:

$2

Внесете го следниов потврден кон:

$3

Набргу ќе ви пишеме како можете да помогнете во подобрувањето на {{SITENAME}}.

Ако го немате побарано ова, занемарате ја поракава, и повеќе ништо нема да ви испраќаме.',
	'emailcapture-success' => 'Ви благодариме!

Вашата е-пошта е успешно потврдена.',
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
	'emailcapture-response-body' => 'നമസ്കാരം!

{{SITENAME}} സംരംഭം മെച്ചപ്പെടുത്താനുള്ള താത്പര്യത്തിനു അകമഴിഞ്ഞ നന്ദി.

താഴെക്കൊടുത്തിരിക്കുന്ന കണ്ണി ഞെക്കി താങ്കളുടെ ഇമെയിൽ വിലാസം സ്ഥിരീകരിക്കാൻ ഒരു നിമിഷം ദയവായി ചിലവഴിക്കുക:
$1

ഇതും താങ്കൾക്ക് സന്ദർശിക്കാവുന്നതാണ്:
$2

എന്നിട്ട് താഴെ കൊടുത്തിരിക്കുന്ന സ്ഥിരീകരണ കോഡ് നൽകുക:
$3

{{SITENAME}} സംരംഭം മെച്ചപ്പെടുത്താൻ താങ്കൾക്ക് എങ്ങനെ സഹായിക്കാനാകും എന്ന് തീരുമാനിക്കാൻ ഞങ്ങൾ താങ്കളുമായി ഉടനെ ബന്ധപ്പെടുന്നതായിരിക്കും.

താങ്കളുടെ ഇച്ഛ പ്രകാരം അല്ല ഈ അഭ്യർത്ഥനയെങ്കിൽ, ഈ ഇമെയിൽ അവഗണിക്കുക, ഞങ്ങൾ താങ്കൾക്ക് പിന്നീടൊന്നും അയച്ച് ബുദ്ധിമുട്ടിയ്ക്കില്ല.',
	'emailcapture-success' => 'നന്ദി!

താങ്കളുടെ ഇമെയിൽ വിലാസം വിജയകരമായി സ്ഥിരീകരിച്ചിരിക്കുന്നു.',
	'emailcapture-instructions' => 'താങ്കളുടെ ഇമെയിൽ വിലാസം പരിശോധനയ്ക്കു പാത്രമാക്കുവാൻ, താങ്കൾക്ക് ഇമെയിൽ വഴി അയച്ചിട്ടുള്ള കോഡ് നൽകിയ ശേഷം "{{int:emailcapture-submit}}" ഞെക്കുക.',
	'emailcapture-verify' => 'പരിശോധനയ്ക്കുള്ള കോഡ്:',
	'emailcapture-submit' => 'ഇമെയിൽ വിലാസം പരിശോധനയ്ക്ക് പാത്രമാക്കുക',
);

/** Dutch (Nederlands)
 * @author McDutchie
 * @author SPQRobin
 * @author Siebrand
 */
$messages['nl'] = array(
	'emailcapture' => 'E-mailadresbevestiging',
	'emailcapture-desc' => 'E-mailadressen bevestigen en stelt gebruikers in staat dit te doen via e-mail',
	'emailcapture-failure' => "Uw e-mailadres is '''niet''' bevestigd.",
	'emailcapture-response-subject' => 'E-mailadrescontrole van {{SITENAME}}',
	'emailcapture-response-body' => 'Hallo!

Bedankt voor uw interesse in het verbeteren van {{SITENAME}}.

Volg deze verwijzing om uw e-mailadres te bevestigen:
$1

U kunt ook deze verwijzing volgen:
$2

En daar de volgende bevestigingscode invoeren:
$3

We nemen binnenkort contact met u op over hoe u kunt helpen {{SITENAME}} te verbeteren.

Als u niet hebt gevraagd om dit bericht, negeer deze e-mail dan en dan krijgt u geen e-mail meer van ons.',
	'emailcapture-success' => 'Bedankt!

Uw e-mailadres is bevestigd.',
	'emailcapture-instructions' => 'Voer de code uit uw e-mail in om uw e-mailadres te bevestigen en klik daarna op "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Bevestigingscode:',
	'emailcapture-submit' => 'E-mailadres bevestigen',
);

/** ‪Nederlands (informeel)‬ (‪Nederlands (informeel)‬)
 * @author Siebrand
 */
$messages['nl-informal'] = array(
	'emailcapture-success' => 'Bedankt!

Je e-mailadres is bevestigd.',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Sjurhamre
 */
$messages['no'] = array(
	'emailcapture' => 'E-postbekreftelse',
	'emailcapture-desc' => 'Samler inn e-postadresser, og lar brukere bekrefte dem via e-post',
	'emailcapture-failure' => "E-postadressen din ble '''ikke''' bekreftet",
	'emailcapture-response-subject' => 'E-postbekreftelse fra {{SITENAME}}',
	'emailcapture-response-body' => 'Bekreft e-postadressen din ved å følge lenken under:
$1

Eventuelt kan du besøke:
$2

Og skrive inn følgende bekreftelseskode:
$3

Takk for at du bekrefter e-postadressen din.',
	'emailcapture-success' => 'E-postadressen din har blitt bekreftet.',
	'emailcapture-instructions' => 'For å bekrefte e-postadressen din, skriver du inn koden du fikk på e-post, og klikker "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Bekreftelseskode:',
	'emailcapture-submit' => 'Bekreft e-postadresse',
);

/** Polish (Polski)
 * @author Sp5uhe
 */
$messages['pl'] = array(
	'emailcapture' => 'Weryfikacja adresu e‐mailowego',
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
	'emailcapture-success' => 'Dziękujemy!

Twój adres e‐mailowy został zweryfikowany.',
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

/** Portuguese (Português)
 * @author Hamilton Abreu
 */
$messages['pt'] = array(
	'emailcapture' => 'Verificação do correio electrónico',
	'emailcapture-desc' => 'Capturar endereços de correio electrónico e permitir que os utilizadores os verifiquem através do próprio correio electrónico',
	'emailcapture-failure' => "O seu correio electrónico '''não''' foi verificado.",
	'emailcapture-response-subject' => 'Verificação do endereço de correio electrónico, da {{SITENAME}}',
	'emailcapture-response-body' => 'Olá!

Obrigado por expressar interesse em ajudar a melhorar a {{SITENAME}}.

Confirme o seu endereço de correio electrónico, clicando o link abaixo, por favor:
$1

Também pode visitar:
$2

E introduzir o seguinte código de confirmação:
$3

Em breve irá receber informações sobre como poderá ajudar a melhorar a {{SITENAME}}.

Se não iniciou este pedido, ignore esta mensagem e não voltará a ser contactado.',
	'emailcapture-success' => 'Obrigado!

O seu correio electrónico foi confirmado.',
	'emailcapture-instructions' => 'Para verificar o seu endereço de correio electrónico, introduza o código que lhe foi enviado por correio electrónico e clique "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Código de verificação:',
	'emailcapture-submit' => 'Verificar endereço',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author Giro720
 */
$messages['pt-br'] = array(
	'emailcapture' => 'Verificação do e-mail',
	'emailcapture-desc' => 'Capturar endereços de e-mail e permitir que os usuários os verifiquem através do próprio e-mail',
	'emailcapture-failure' => "O seu e-mail '''não''' foi verificado.",
	'emailcapture-response-subject' => 'Verificação do endereço de e-mail, da {{SITENAME}}',
	'emailcapture-response-body' => 'Olá!

Obrigado por expressar interesse em ajudar a melhorar a {{SITENAME}}.

Confirme o seu endereço de e-mail, clicando o link abaixo, por favor:
$1

Você também pode visitar:
$2

E introduzir o seguinte código de confirmação:
$3

Em breve irá receber informações sobre como poderá ajudar a melhorar a {{SITENAME}}.

Se você não iniciou este pedido, ignore esta mensagem e você não voltará a ser contactado.',
	'emailcapture-success' => 'Obrigado!

O seu e-mail foi confirmado.',
	'emailcapture-instructions' => 'Para verificar o seu endereço de e-mail, introduza o código que lhe foi enviado por e-mail e clique "{{int:emailcapture-submit}}".',
	'emailcapture-verify' => 'Código de verificação:',
	'emailcapture-submit' => 'Verificar endereço de e-mail',
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
	'emailcapture-response-body' => 'Здравствуйте!

Спасибо за выражение интереса к улучшению проекта {{SITENAME}}.

Пожалуйста, подтвердите свой адрес электронной почты, перейдя по ссылке:
$1

Вы также можете зайти на страницу:
$2

и ввести следующий проверочный код:
$3

Вскоре мы сообщим вам, как можно помочь в улучшении проекта {{SITENAME}}.

Если вы не отправляли подобного запроса, пожалуйста, проигнорируйте это сообщение, мы больше не будем вас тревожить.',
	'emailcapture-success' => 'Спасибо!

Ваш адрес электронной почты был подтверждён.',
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
	'emailcapture-response-body' => 'Pozdravljeni!

Zahvaljujemo se vam za izkazano zanimanje za pomoč pri izboljševanju {{GRAMMAR:rodilnik|{{SITENAME}}}}.

Prosimo, vzemite si trenutek in potrdite vaš e-poštni naslov s klikom na spodnjo povezavo:
$1

Obiščete lahko tudi:
$2

in vnesete naslednjo potrditveno kodo:
$3

Kmalu vam bomo sporočili, kako lahko pomagate izboljšati {{GRAMMAR:tožilnik|{{SITENAME}}}}.

Če tega niste zahtevali, prosimo, prezrite to e-pošto in ničesar več vam ne bomo poslali.',
	'emailcapture-success' => 'Hvala!

Vaš e-poštni naslov je bil uspešno potrjen.',
	'emailcapture-instructions' => 'Da preverite vaš e-poštni naslov, vnesite kodo, ki ste jo prejeli po e-pošti, in kliknite »{{int:emailcapture-submit}}«.',
	'emailcapture-verify' => 'Koda za preverjanje:',
	'emailcapture-submit' => 'Preveri e-poštni naslov',
);

/** Swedish (Svenska)
 * @author WikiPhoenix
 */
$messages['sv'] = array(
	'emailcapture' => 'E-postbekräftelse',
	'emailcapture-success' => 'Tack!

Din e-post har bekräftats.',
	'emailcapture-verify' => 'Verifieringskod:',
	'emailcapture-submit' => 'Verifiera e-postadress',
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
	'emailcapture-success' => 'ధన్యవాదాలు!

మీ ఈమెయిలు చిరునామా నిర్ధారితమైంది.',
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
	'emailcapture-success' => 'Salamat!

Matagumpay na natiyak ang e-liham mo.',
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
	'emailcapture-response-body' => 'Xin chào!

Cám ơn bạn đã bày tỏ quan tâm về việc giúp cải tiến {{SITENAME}}.

Xin vui lòng xác nhận địa chỉ thư điện tử của bạn qua liên kết này:
$1

Bạn cũng có thể ghé thăm:
$2

và nhập mã xác minh sau:
$3

Chúng tôi sẽ sớm liên lạc với bạn với thông tin về giúp cải tiến {{SITENAME}}.

Nếu bạn không phải là người yêu cầu thông tin này, xin vui lòng kệ thông điệp này và chúng tôi sẽ không gửi cho bạn bất cứ gì nữa.',
	'emailcapture-success' => 'Cám ơn!

Địa chỉ thư điện tử của bạn đã được xác minh thành công.',
	'emailcapture-instructions' => 'Để xác minh địa chỉ thư điện tử của bạn, hãy nhập mã trong thư điện tử đã được gửi cho bạn và bấm nút “{{int:emailcapture-submit}}”.',
	'emailcapture-verify' => 'Mã xác minh:',
	'emailcapture-submit' => 'Xác minh địa chỉ thư điện tử',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Hydra
 * @author 阿pp
 */
$messages['zh-hans'] = array(
	'emailcapture' => '电子邮件验证',
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
	'emailcapture-success' => '谢谢！

您的电子邮件已成功地确认。',
	'emailcapture-instructions' => '输入邮件的标明的验证码并点击"{{int:emailcapture-submit}}"以验证您的邮箱地址。',
	'emailcapture-verify' => '验证码：',
	'emailcapture-submit' => '验证电子邮件地址',
);

