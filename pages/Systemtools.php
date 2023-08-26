<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi.biz |Datenträger-Tools"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/Datenträger-Tools"; include ('./includes/nav.php'); ?>
</header>
<script src="navibar.js"></script>
<main>
<div class="grid-container">
<article class="content flow">
<h3>Windows Diskpart</h3>
<img src="pics/dp1.jpg" height="145px"><br>
<p><b>Diskpart</b> ist das System-eigene Tool zum Formatieren von Datenträgern.
Man öffnet es über die CMD-Eingabeaufforderung mit dem Befehl <b>diskpart</b>.</p>
<p>Zuerst lässt man sich alle Datenträger anzeigen mit <b>list disk</b>.
Dann selektiert man den gewünschten Datenträger mit <b> select disk</b> und dessen <b>Nummer</b>.</p>
<h3>Datenträger: Partitionen -> Volumen</h3>
<p> Partitionen und Volumen lassen sich mit dem list-Befehl anzeigen (wenn der Datenträger selektiert wurde).
Der einfachste Weg um alle Partitionen zu löschen, bzw. <ins>den Platz freizugeben</ins>
geht mit dem <b>clean</b> Befehl. Wenn die Daten richtig gelöscht werden sollen, kann man mit <b>clean all</b> alle Sektoren mit Nullen überschreiben. Das kann sehr viel Zeit beanspruchen aber selbst dann sind Daten theoretisch noch wiederherstellbar. Um Daten unlesbar zu machen müssen Sektoren mehrmals überschrieben werden. Das geht auf Windows nur mit Extra-Software, in Linux hat man den Befehl <b>shred</b> der auch einzelne Dateien fokusieren kann.</p>
<p>Um ein neues Dateisystem zu erstellen muss der Datenträger neu formatiert werden, danach werden Partition erstellt auf denen freies Volumen ist (Speicherplatz).</p>
</article>
<article class="content flow">
<h3>Linux DiskDump (dd) und fdisk</h3>
<p><b>dd</b> Disk Dump ist die Linux Variante. Achtung! Hier kann sehr einfach was schiefgehen, wenn die Befehls-Flaggen nicht stimmen.
Man kann GANZE Festplatten klonen oder löschen, und viel mehr. Die Syntax vom dd-Befehl ist folgende:</p>
<code>dd if=<i>[input file]</i> of=<i>[output file]</i> &lt;<i>Optionen</i>&gt;<br>
dd if=/dev/sda of=/dev/sdb bs=BYTE</code>
</article>
<article class="content flow">
<p><b>fdisk</b> ist auch ein Standard-Linux-Tool, das mit einem Auswahl-Menü etwas leichter zu bedienen ist und viele vorgefertigte Optionen, Funktionen und Dateisysteme bereitstellt.
<code>fdisk <i>[dev/Geräte-Datei]</i></code></p>
<p>Eine wichtige Rolle beim Formatieren spielt das gewählte Datei-System.
<b>FAT32/exFAT</b> ist der Standard für USB-Sticks und andere "Wechseldatenträger".
Es wird von den meisten Systemen unterstützt/erkannt, hat aber einige Beschränkungen.
<b>NTFS</b> (Windows) oder <b>EXT4</b> (Linux) dagegen ist für Betriebssysteme geeignet, da es Eigenschaften wie Blockeinträge,
Zugriffsberechtigung, Datum usw. in einem reservierten MFT (Master File Table) abspeichert.
Es sind mehrere Partitionen gleichzeit möglich und das Limit für Dateigrößen ist über 4 GiB.</p>
</article>
<article class="content flow">
<p><b>fdisk</b> ist auch ein Standard-Linux-Tool, das mit einem Auswahl-Menü etwas leichter zu bedienen ist und viele vorgefertigte Optionen, Funktionen und Dateisysteme bereitstellt.
<code>fdisk <i>[dev/Geräte-Datei]</i></code></p>
<p>Eine wichtige Rolle beim Formatieren spielt das gewählte Datei-System.
<b>FAT32/exFAT</b> ist der Standard für USB-Sticks und andere "Wechseldatenträger".
Es wird von den meisten Systemen unterstützt/erkannt, hat aber einige Beschränkungen.
<b>NTFS</b> (Windows) oder <b>EXT4</b> (Linux) dagegen ist für Betriebssysteme geeignet, da es Eigenschaften wie Blockeinträge,
Zugriffsberechtigung, Datum usw. in einem reservierten MFT (Master File Table) abspeichert.
Es sind mehrere Partitionen gleichzeit möglich und das Limit für Dateigrößen ist über 4 GiB.</p>
</article>
</div>
</main>
<footer>
<?php readfile ('./includes/footer.htm'); ?>
</footer>
</body>
</html>

