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

<body class="startseite">

<main>
	
<img id="logo" src="p/FK12_Logo.jpg" alt="Fakultät für Design, Hochschule München" width="400" height="122">

<h2>Vielen Dank für Ihr Interesse an unserer Fakultät!</h2>
<p>Bitte fühlen Sie <strong>alle</strong> unten genannten Punkte sorgfältig aus – nur so können Sie sicher stellen, dass Ihre Anmeldung problemlos funktioniert!</p>

<form action="controlle.php">
	
<h3>Für welche Studienrichtung bewerben Sie sich?</h3>
<p class="anmerkung"><em>Wenn Sie sich für mehrere Studienrichtungen bewerben wollen, müssen Sie sich mehrmals anmelden und natürlich für jede Studienrichtung eine separate Mappe abgeben!</em></p>

<!-- Studienrichtung -->
<section class="studienrichtung">
<input type="radio" id="Fotodesign" name="Studienrichtung" value="Fotodesign"><label for="Fotodesign">Fotodesign</label><br>
<input type="radio" id="Industriedesign" name="Studienrichtung" value="Industriedesign"><label for="Industriedesign">Industriedesign</label><br>
<input type="radio" id="Kommunikationsdesign" name="Studienrichtung" value="Kommunikationsdesign"><label for="Kommunikationsdesign">Kommunikationsdesign</label>
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

<div>
<input type="text" placeholder="Straße" required>
<label>Straße</label>
</div>

<div>
<input type="text" placeholder="Nummer" required>
<label>Nummer</label>
</div>

<div>
<input type="text" placeholder="Stadt" required>
<label>Stadt</label>
</div>

<div>
<input type="text" placeholder="PLZ" required>
<label>PLZ</label>
</div>

<select>
<option value="BE" >Belgien</option>
<option value="BG" >Bulgarien</option>
<option value="DK" >Dänemark</option>
<option value="DE" selected="selected" >Deutschland</option>
<option value="EE" >Estland</option>
<option value="FI" >Finnland</option>
<option value="FR" >Frankreich</option>
<option value="GR" >Griechenland</option>
<option value="IE" >Irland</option>
<option value="IS" >Island</option>
<option value="IT" >Italien</option>
<option value="HR" >Kroatien</option>
<option value="LV" >Lettland</option>
<option value="LT" >Litauen</option>
<option value="LU" >Luxemburg</option>
<option value="MT" >Malta</option>
<option value="NL" >Niederlande</option>
<option value="NO" >Norwegen</option>
<option value="AT" >Österreich</option>
<option value="PL" >Polen</option>
<option value="PT" >Portugal</option>
<option value="RO" >Rumänien</option>
<option value="SE" >Schweden</option>
<option value="CH" >Schweiz</option>
<option value="SK" >Slowakei</option>
<option value="SI" >Slowenien</option>
<option value="ES" >Spanien</option>
<option value="CZ" >Tschechische Republik</option>
<option value="HU" >Ungarn</option>
<option value="GB" >Vereinigtes Königreich</option>
<option value="CY" >Zypern</option>
</select>

</section>

<hr>

<section class="schon_mal_geprueft">

<div>
<p>Ich habe bereits einmal die Eignungsprüfung für den Studiengang Design an der Hochschule München abgelegt</p>

<input type="radio" id="Pruefung_nein" name="Pruefung_schon_mal_gemacht" value="nein"><label for="Pruefung_nein">nein</label>
<input type="radio" id="Pruefung_ja" name="Pruefung_schon_mal_gemacht" value="ja"><label for="Pruefung_ja">ja, im Wintersemester</label> <input type="text" placeholder="Jahreszahl">

</div>

<!-- Studienrichtung schon mal Aufnahmeprüfung -->
<div>
<input type="radio" id="Fotodesign_schon_mal_Aufnahmepruefung" name="Studienrichtung_schon_mal_Aufnahmepruefung" value="Fotodesign"><label for="Fotodesign_schon_mal_Aufnahmepruefung">Fotodesign</label><br>
<input type="radio" id="Industriedesign_schon_mal_Aufnahmepruefung" name="Studienrichtung_schon_mal_Aufnahmepruefung" value="Industriedesign_schon_mal_Aufnahmepruefung"><label for="Industriedesign_schon_mal_Aufnahmepruefung">Industriedesign</label><br>
<input type="radio" id="Kommunikationsdesign_schon_mal_Aufnahmepruefung" name="Studienrichtung_schon_mal_Aufnahmepruefung" value="Kommunikationsdesign_schon_mal_Aufnahmepruefung"><label for="Kommunikationsdesign_schon_mal_Aufnahmepruefung">Kommunikationsdesign</label>
</div>

<!-- Ergebniss der Aufnahme-Prüfung -->
<div>
Ergebnis:
<input type="radio" id="Pruefung_schon_mal_bestanden_ja" name="Pruefung_schon_mal_bestanden" value="nein"><label for="Pruefung_schon_mal_bestanden_ja">bestanden</label>
<input type="radio" id="Pruefung_schon_mal_bestanden_nein" name="Pruefung_schon_mal_bestanden" value="ja"><label for="Pruefung_schon_mal_bestanden_nein">nicht bestanden</label>
</div>

</section>

<hr>

<section class="bewerbungsmappe">
	
<input type="checkbox" id="Bewerbungsmappe" name="Bewerbungsmappe" value="zugestimmt"><label for="Bewerbungsmappe">Ich verpflichte mich hiermit, meine Bewerbungsmappe nicht vor Abschluss des Bewerbungsverfahren abzuholen</label>

</section>

<button id="weiter">weiter</button>

</form>
	
</main>

<!-- https://developers.google.com/speed/libraries/devguide -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>!window.jQuery && document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
<script src="assets/scripte-min.js?v=1.0"></script>

</body>
</html>