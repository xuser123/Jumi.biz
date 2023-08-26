<!DOCTYPE html>
<html lang="de">
<head>
	<?php $Seite = "Jumi.biz |IT-Systeme"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/IT-Systeme"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
<h3>IT-Systeme</h3>
<p><b>Drucker</b></p>
<ul>
<li>Laser
<ul>
<li>Meistens schwarz/weis</li>
<li>Meistbenutzter Drucker</li>
<li>Marken: Ricoh, HP, Trumph Adler, Kyocera, Brother</li>
<li>Toner &amp; Trommel</li>
</ul></li>
<li>Tintenstrahl
<ul>
<li>Eher selten</li>
<li>3D-Bilder möglich</li>
</ul></li>
<li>All-In-One
<ul>
<li>Mit Netzwerkfunktionen</li>
</ul></li>
<li>Etiketten
<ul>
<li>Teuer</li>
</ul></li>
<li>Nadeldrucker
<ul>
<li>Durchschläge</li>
<li>In Arztpraxen, oder Bus-/Bahnautomaten</li>
</ul></li>
<li>Karten
<ul>
<li>ISO Standard Plastikkarten</li>
<li>Zenius sind Marktführer</li>
</ul></li>
<li>3D
<ul>
<li>Kreuzung aus Laser und Tintenstrahl</li>
</ul></li>
</ul>
</article>
<article class="content flow">
<p><b>PC Arbeitsplatz Ergonomie</b></p>
<ul>
<li>Oberste Bildschirmzeile leicht unterhalb Sehachse
<ul>
<li>Stuhl- und Tischhöhe anpassen</li>
</ul></li>
<li>Tastatur &amp; Maus mit rechtwinkligen Ellenbogen</li>
<li>90° Winkel Ober- und Unterarm / Ober- und Unterschenkel</li>
<li>Monitor-Sichtabstand mindestens 50 cm</li>
<li>Bildschirm im rechten Winkel zum Fenster</li>
<li>Feste Auflage der Füße</li>
</ul>
<p><b>Arbeitsverordnung</b></p>
<ul>
<li>Arbeitsbedingung
<ul>
<li>Arbeitgeber ist den Vorgaben des ArbSchG §5 verpflichtet</li>
<li>Augenmerk auf:
<ul>
<li>Mögliche, körperliche Probleme</li>
<li>Denkbare, psychische Belastungen</li>
<li>Gefährdung des Sehvermögens</li>
</ul></li>
</ul></li>
<li>Bildschirm &amp; Tastatur
<ul>
<li>reflexionsarme Oberfläche</li>
<li>Beschriftung der Tasten
<ul>
<li>Kontrast / Hervorhebung</li>
</ul></li>
<li>Kein Flimmern</li>
<li>Deutliche Erkennbare Zeichen</li>
</ul></li>
<li>Sonstige Arbeitsmittel
<ul>
<li>Ergonomischer, standsicherer Stuhl</li>
<li>Große, reflexionsarme Oberfläche</li>
</ul></li>
<li>Arbeitsumgebung
<ul>
<li>Ausreichend Raum</li>
<li>Entsprechende Beleuchtung</li>
<li>Gewisse Luftfeuchtigkeit</li>
<li>Lärmvermeidung</li>
</ul></li>
<li>Zusammenwirken - Mensch &amp; Arbeitsmittel
<ul>
<li>der Tätigkeit entsprechende, benutzerfreundliche Software</li>
<li>Keine Kontrolle der Software zur Mitarbeiterüberwachung</li>
</ul></li>
<li>Untersuchung der Augen in regelmäßigen Abständen anbieten (Arbeitgeber)</li>
<li>Regelmäßige Pausen zuteilen</li>
</ul>
</article>
<article class="content flow">
<p><b>Redundant Array of Independent Disks (RAID)</b></p>
<ul>
<li>Redundante Anordnung unabhängiger Festplatten</li>
<li>Redundanz = Vorhandensein von Ressourcen zum störungsfreien Betrieb</li>
<li>Daten sicher speichern, auf mehrere Festplatten</li>
<li>Speicherungstechniken:
<ul>
<li>Spiegelung
<ul>
<li>Datensatz wird auf zwei verschiedenen Festplatten gespeichert</li>
</ul></li>
<li>Streifen (Stripping)
<ul>
<li>Aufgeteilter Datensatz auf mehreren Festplatten</li>
<li>Erhöhte Lese- und Schreibgeschwindigkeit
<ul>
<li>Gleichzeitiges Lesen mehrerer Festplatten</li>
</ul></li>
</ul></li>
</ul></li>
</ul>
<p><b>Parität</b></p>
<ul>
<li>Fällt eine Festplatte aus, kann mit Hilfe der Parität die fehlende Information wieder hergestellt werden</li>
<li>Paritäten auf Extra-Festplatte/n</li>
</ul>
<p><b>RAID 0</b></p>
<ul>
<li>Verteilung auf mehrere Festplatten (Stripping)</li>
<li>Nutzungskapazität: 100%</li>
<li>Geschwindigkeit ist einzigster Vorteil</li>
</ul>
<p><b>RAID 1</b></p>
<ul>
<li>Spiegelung</li>
<li>Nutzungskapazität: 50%</li>
<li>Merksatz: Bei gemischter Umgebung immer kleinste Festplatte berechnen.</li>
</ul>
<p><b>RAID 5</b></p>
<ul>
<li>Streifen (Stripping)</li>
<li>Mindestens 3 Festplatten</li>
<li>Redundanz: 1 Festplatten-Ausfall</li>
<li>Nutzungskapazität: 67-94% (3-1 Festplatte/n)</li>
<li>1 Paritäts-Festplatte</li>
<li>RAID-Controller berechnet Parität</li>
<li>Langsame Schreibgeschwindigkeit</li>
<li>Anwendungs-Beispiel: Archivsysteme</li>
<li>Rekonstruktion von Daten durch Rückrechnung (Parität)</li>
</ul>
<p><b>RAID 6</b></p>
<ul>
<li>Streifen (Stripping)</li>
<li>Nutzungskapazität: 50-88% (4-2 Festplatten)</li>
<li>Redundanz: 2 Festplatten-Ausfälle</li>
<li>Mindestens 4 Festplatten</li>
<li>Doppelte Parität</li>
<li>Schnelle Lesegeschwindigkeit</li>
<li>Sehr langsame Schreibgeschwindigkeit</li>
<li>Hohe Ausfallsicherheit</li>
</ul>
<p><b>RAID 10</b></p>
<ul>
<li>RAID o und 1 vereint</li>
<li>Nutzungskapazität: 50%</li>
<li>Redundanz: Maximal 2 Festplatten-Ausfälle</li>
<li>2 Spiegelungen durch Verteilung</li>
<li>Sehr schnell mit Ausfallsicherheit</li>
<li>Anwendungs-Beispiel: Virtuelle Laufwerke</li>
<li>Hohe Kosten</li>
</ul>
</article>
</div>
</main>
<footer>
	<?php readfile ('./includes/footer.htm'); ?>
</footer>
</body>
</html>
