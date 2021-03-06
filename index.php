<!DOCTYPE html>
<html lang="de">
<head>
<title>Fakultät für Design, Hochschule München, Online-Anmeldung Bachelor</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="Matthias Edler-Golla, 10/12/2016">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css?v=1.0">
</head>

<body>

<main>

<header class="cf">
<img id="logo" src="p/FK12_Logo.jpg" alt="Fakultät für Design, Hochschule München" srcset="p/FK12_Logo.jpg 600w, p/FK12_Logo_pur.jpg 317w" sizes="33vw">
<h1>Fakultät für Design</h1>
</header>

<h2>Vielen Dank für Ihr Interesse an unserer Fakultät!</h2>
<p><strong>Bitte füllen Sie alle unten genannten Punkte sorgfältig aus</strong> – nur so können Sie sicher stellen, dass Ihre Anmeldung problemlos funktioniert!</p>

<form action="controlle.php">
	
<h3>Für welche Studienrichtung bewerben Sie sich?</h3>
<p class="anmerkung"><em>Wenn Sie sich für mehrere Studienrichtungen bewerben wollen, müssen Sie sich mehrmals anmelden und natürlich für jede Studienrichtung eine separate Mappe abgeben!</em></p>

<!-- Studienrichtung -->
<section class="studienrichtung">
<input type="radio" id="Fotodesign" name="Studienrichtung" value="Fotodesign" required><label for="Fotodesign">Fotodesign</label><br>
<input type="radio" id="Industriedesign" name="Studienrichtung" value="Industriedesign" required><label for="Industriedesign">Industriedesign</label><br>
<input type="radio" id="Kommunikationsdesign" name="Studienrichtung" value="Kommunikationsdesign" required><label for="Kommunikationsdesign">Kommunikationsdesign</label>
</section>

<hr>

<section class="adresse">

<div>
<input type="text" placeholder="Vorname" required>
<label>Vorname</label>
</div>

<div>
<input type="text" placeholder="Familienname" required>
<label>Familienname</label>
</div>

<div>
<input type="email" placeholder="Mail-Adresse" required>
<label>Mail-Adresse</label>
</div>

<div>
<input type="email" placeholder="Mail-Adresse (Wiederholung)" required>
<label>Mail-Adresse (Wiederholung)</label>
</div>

<div>
<input type="tel" placeholder="Telefon-Nummer" required>
<label>Telefon-Nummer</label>
</div>

<section class="strassenkombi">

<div>
<input type="text" placeholder="Straße" required>
<label>Straße</label>
</div>

<div>
<input type="text" placeholder="Hausnummer" required>
<label>Hausnummer</label>
</div>

</section><!-- /strassenkombi -->

<section class="stadtkombi">

<div>
<input type="text" placeholder="PLZ" required>
<label>PLZ</label>
</div>

<div>
<input type="text" placeholder="Stadt" required>
<label>Stadt</label>
</div>

</section><!-- /stadtkombi -->

<div>
<input type="text" placeholder="Land" required>
<label>Land</label>
</div>

</section>

<hr>

<section class="schon_mal_geprueft">

<p>Ich habe bereits einmal die <strong>Eignungsprüfung für den Studiengang Design</strong> an der Hochschule&#160;München abgelegt</p>

<!-- schon mal Aufnahmeprüfung? -->
<section class="pruefung_wiederholung cf">
<div><input type="radio" id="Pruefung_nein" name="Pruefung_schon_mal_gemacht" value="nein" required><label for="Pruefung_nein">nein</label></div>


<div><input type="radio" id="Pruefung_ja" name="Pruefung_schon_mal_gemacht" value="ja" required><label for="Pruefung_ja">ja, im Wintersemester</label></div>
<div><input id="jahreszahl" type="text" placeholder="Jahreszahl"></div>


</section>

<!-- dieser Teil erst sichtbar, wenn ja ausgewählt wurde! -->

<!-- =============== anfangs unsichtbar / Anfang ========== -->

<div id="jaSchonMalBeworben">

<!-- Studienrichtung schon mal Aufnahmeprüfung -->
<section class="studienrichtung_wiederholung">
<div><input type="radio" id="Fotodesign_schon_mal_Aufnahmepruefung" name="Studienrichtung_schon_mal_Aufnahmepruefung" value="Fotodesign"><label for="Fotodesign_schon_mal_Aufnahmepruefung">Fotodesign</label></div>
<div><input type="radio" id="Industriedesign_schon_mal_Aufnahmepruefung" name="Studienrichtung_schon_mal_Aufnahmepruefung" value="Industriedesign_schon_mal_Aufnahmepruefung"><label for="Industriedesign_schon_mal_Aufnahmepruefung">Industriedesign</label><br></div>
<div><input type="radio" id="Kommunikationsdesign_schon_mal_Aufnahmepruefung" name="Studienrichtung_schon_mal_Aufnahmepruefung" value="Kommunikationsdesign_schon_mal_Aufnahmepruefung"><label for="Kommunikationsdesign_schon_mal_Aufnahmepruefung">Kommunikationsdesign</label></div>
</section>

<!-- Ergebniss der Aufnahme-Prüfung -->
<section class="pruefung_wiederholung">
<div>Ergebnis:</div>
<div><input type="radio" id="Pruefung_schon_mal_bestanden_ja" name="Pruefung_schon_mal_bestanden" value="nein"><label for="Pruefung_schon_mal_bestanden_ja">bestanden</label></div>
<div><input type="radio" id="Pruefung_schon_mal_bestanden_nein" name="Pruefung_schon_mal_bestanden" value="ja"><label for="Pruefung_schon_mal_bestanden_nein">nicht bestanden</label></div>
</section>

</div><!-- /jaSchonMalBeworben -->

<!-- =============== anfangs unsichtbar / Ende ========== -->

</section><!-- /schon_mal_geprueft -->

<hr>

<section class="bewerbungsmappe cf">
	
<input type="checkbox" id="Bewerbungsmappe" name="Bewerbungsmappe" value="zugestimmt" required><label for="Bewerbungsmappe">Ich verpflichte mich, meine Bewerbungsmappe nicht vor Abschluss des Bewerbungsverfahren abzuholen</label>

<div style="clear:both;padding: .5em 0"></div>

<input type="checkbox" id="OnlineAnmeldungHM" name="OnlineAnmeldungHM" value="zugestimmt" required><label for="OnlineAnmeldungHM">Ich weiss, dass ich mich zusätzlich über die <a href="https://www.hm.edu/studieninteressiert/bewerbung/bachelor_bewerbung/index.de.html" title='' target="_blank">Homepage der Abteilung Studium der Hochschule München</a> bewerben muss!</label>

</section>

<button id="weiter">weiter</button>

<p id="datenschutzLink"><a href="datenschutzhinweis.php" title='' target="_blank">Datenschutzhinweis</a></p>

</form>
	
</main>

<!-- bisher nur zum Abfragen bei "ja" vor "#jaSchonMalBeworben" verwendet -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
<script src="assets/scripte-min.js?v=1.0"></script>

</body>
</html>