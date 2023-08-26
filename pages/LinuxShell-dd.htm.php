<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi |dd"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/LinuxShell dd"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
<h1>LinuxShell dd</h1>
<p>Synonyme:</p>
<ul>
<li>offiziell<ul>
<li>&quot;Data Definition&quot;</li></ul>
</li><li>allgemein<ul>
<li>&quot;Disk Dump&quot;</li><li>&quot;Disk Destroyer&quot;</li></ul>
</li></ul>
<p>Risiken bei unkorrekter Verwendung: </p>
<ul>
<li>Datenverlust</li><li>Systemfehler</li><li>Bootprobleme</li></ul>
<p>Basic-Syntax:
 <code>dd if=&lt;Input-Pfad-oder-Datei&gt; of=&lt;Output-Pfad-oder-Datei&gt; &lt;Optionen&gt;</code>
Häufig-verwendete Optionen:  <code>bs=</code>, <code>count=</code>, <code>status=progress</code></p>
</article>
<article class="content flow">
<h3 id="optimale-optionen-f%C3%BCr-diskdump-dd-ausrechnen">Optimale Optionen für DiskDump <code>dd</code> ausrechnen</h3>
<ol>
<li>Speicherblöcke in Bytes anzeigen mit <code>lsblk -b</code></li><li>Faktoren für optimale Blockgrößen-Option <code>bs=</code>  berücksichtigen <ul>
<li>Speichermedium-Typ: <ul>
<li>HDD, SSD, CD (Optisch)</li></ul>
</li><li>Verbindung und Schreibgeschwindigkeit<ul>
<li>SATA, USB 2.0, USB 3.0 </li><li>USB 3.2 <ul>
<li>bis zu 20Gbit/s (2,5 GB/s)</li></ul>
</li><li>SD (UHS-III, Speed Class 10)<ul>
<li>bis zu 985 MB/s</li></ul>
</li></ul>
</li><li>Übertragungsrate</li><li>Hardwarekonfiguration</li><li>Cache-Größe des Mediums</li></ul>
</li><li>Blockgröße zu Bytes umrechnen<ul>
<li>Rechnen im Linux Terminal mit Befehl <code>expr</code> <ul>
<li>Multiplikation <code>\*</code>, Division <code>/</code> </li></ul>
</li></ul>
</li></ol>
</article>
<article class="content flow">
<p>Multiplikative Suffixe für Blockgröße <code>bs=</code>
|Suffix|Multiplikator| 
|-|---|
|b|512|
|K|1024|
|M|1024 <em> 1024|
|G|1024 </em> 1024 * 1024|</p>
<table>
<thead>
<tr>
<th>Blockgröße</th>
<th>Umrechnung</th>
<th>Bytes</th>
</tr>
</thead>
<tbody>
<tr>
<td>16M</td>
<td>16 * 1.048.576</td>
<td>16.777.216</td>
</tr>
<tr>
<td>32M</td>
<td>32 * 1.048.576</td>
<td>33.554.432</td>
</tr>
<tr>
<td>64M</td>
<td>64 * 1.048.576</td>
<td>67.108.864</td>
</tr>
<tr>
<td>128M</td>
<td>128 * 1.048.576</td>
<td>134.217.728</td>
</tr>
<tr>
<td>256M</td>
<td>256 * 1.048.576</td>
<td>268.435.456</td>
</tr>
<tr>
<td>512M</td>
<td>512 * 1.048.576</td>
<td>536.870.912</td>
</tr>
<tr>
<td>1G</td>
<td>1.024 * 1.048.576</td>
<td>1.073.741.824</td>
</tr>
</tbody>
</table>
<ol>
</article>
<article class="content flow">
<li>Block-Anzahl <code>count=</code> berechnen<ul>
<li>Gesamtgröße mit Blockgröße dividieren </li><li>Formel: <code>count = total_size / block_size</code></li></ul>
</li><li>Beispiel: SD HC Speicher mit Nullen überschreiben<ul>
<li>UHS-III, Speed Class 10, V90 II) 32GB</li><li>Gesamtgröße <code>62914560000</code> Bytes und Blockgröße <code>bs=512M</code></li><li><code>expr 512 \* 1048576</code><ul>
<li>Ausgabe: <code>536870912</code></li></ul>
</li><li><code>expr 62914560000 / 536870912</code><pre><code>  - Ausgabe: `1875`
</code></pre></li><li>Syntax: <code>dd if=/dev/zero of=/dev/sdc bs=32M count=1875</code><ul>
<li><strong>Achtung</strong>: Befehl löscht Daten!</li></ul>
</li></ul>
</li></ol>
</article>
<article class="content flow">
<h3 id="backup-image-erstellen-und-komprimieren">Backup-Image erstellen und komprimieren</h3>
<p>Befehl <code>gzip</code> kann <code>dd</code>-Prozesse mit Pipe-Operator <code>|</code> einleiten oder ausleiten
Backups erstellen:
<code>dd if=/dev/sda | gzip &gt; /mnt/backup.img.gz</code>
Backups auslesen und wiederherstellen:
<code>gzip -dc /mnt/backups.img.gz | dd of=/dev/sda</code> </p>
<ul>
<li><code>-d</code> Flagge steht für &quot;decompress&quot;</li><li><code>-c</code> Flagge nur bei Prozess-Weiterleitung verwenden!</li><li>Komprimierte Ausgabe an stdout-Stream weiterleiten<ul>
<li>für Prozesse anderer Befehle sinnvoll
Leere Partitionen (voll Nullen) von Quell-Geräten schneller auslesen mit Option <code>iflag=fullblock</code></li></ul>
</li></ul>
</article>
</div>
<div class="grid-container">
<article class="content flow">
</article>
<article class="content flow">
</article>
<article class="content flow">
</article>
<article class="content flow">
</article>
<article class="content flow">
</article>

</div>
</main>
<footer>
  <?php readfile ('./includes/footer.htm') ?>
</footer>
</body>
</html>
