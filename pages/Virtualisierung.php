<!DOCTYPE html>
<html lang="de">
<head>
   <?php $Seite = "Jumi |Virtualization"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/Virtualization"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
	<article class="content flow">
	<h3>Virtual Machine (VM)</h3>
	<p><b>Virtuelle Maschinen</b> ein verkapseltes, komplettes Betriebssysteme, innerhalb eines laufenden Rechnersystems. Im (CPU-)Prozessor wird eine Rechnerachritekur virtualisiert, die "virtuelle Maschine".</p>
	<p>Je nach Anforderungen der Systemressourcen kann man so z.B. Android virtualisieren, so habe ich Whatsapp auf meinem PC genutzt weil meine Smartphones "bricked" waren :)</p>
	<p>Bekannte Programme sind <b><a href="https://www.virtualbox.org">VirtualBox</a></b> und <b><a href="https://my.vmware.com">VMWare</a></b>, für Linux der <b>Virt-Manager</b>.</p>
	<p>Über eine sogenannte "<b>VM</b>" erreicht man erhöhte Sicherheit durch System-Kaskaden.</p>
	<p>Schadcode kann dann normalerweise nicht mehr den Host-Rechner erreichen. Nach einem Infekt oder bei verwerflichem Gebrauch kann man alles per Snapshot-Funktion zurücksetzen, oder das System neu installieren.</p>
	<p>Oder man virtualisiert ein altes Windows 98 und spielt das gute alte "Roller Coaster Tycoon"</p>
    <div class="flex">
	<img src="pics/mbs.jpg" width="216px"><img src="pics/mbs1.jpg" width="216px">
	</div>
	</article>
	<article class="content flow">
	<h3>Containervirtualisierung</h3>
	<p>Etwas ähnliches ist ein "<b>Container</b>" oder eine "<b>Sandbox</b>". Sie erzeugt eine Art Schattenkopie des Hostsystems auf virtuellem "Speicherplatz".</p>
	<p>Im Vergleich zu einer VM hat eine Containervirtualisierung mehr Einschränkungen weil die Programm dann als "Gäste" voneinander getrennt, den Kernel mitbenutzen. Dafür sind Container aber sehr ressourcenschonender Programme holen sich nur das Nötigste in den Container bzw. in die Sandbox und bleiben isoliert vom Hostsystem, das schützt vor Schadcode.</p>
	<p>Nach Gebrauch ist das "Löschen der Sandbox" üblich. Bekannte Programme sind <b>Docker</b>, <b>Sandboxie</b> für Windows und <b>Firejail</b> für Linux.</p>
	</article>
	<article class="content flow">
	<h3>Containervirtualisierung</h3>
	<p>Etwas ähnliches ist ein "<b>Container</b>" oder eine "<b>Sandbox</b>". Sie erzeugt eine Art Schattenkopie des Hostsystems auf virtuellem "Speicherplatz".</p>
	<p>Im Vergleich zu einer VM hat eine Containervirtualisierung mehr Einschränkungen weil die Programm dann als "Gäste" voneinander getrennt, den Kernel mitbenutzen. Dafür sind Container aber sehr ressourcenschonender Programme holen sich nur das Nötigste in den Container bzw. in die Sandbox und bleiben isoliert vom Hostsystem, das schützt vor Schadcode.</p>
	<p>Nach Gebrauch ist das "Löschen der Sandbox" üblich. Bekannte Programme sind <b>Docker</b>, <b>Sandboxie</b> für Windows und <b>Firejail</b> für Linux.</p>
	</article>
	<article class="content flow">
	<h3>Containervirtualisierung</h3>
	<p>Etwas ähnliches ist ein "<b>Container</b>" oder eine "<b>Sandbox</b>". Sie erzeugt eine Art Schattenkopie des Hostsystems auf virtuellem "Speicherplatz".</p>
	<p>Im Vergleich zu einer VM hat eine Containervirtualisierung mehr Einschränkungen weil die Programm dann als "Gäste" voneinander getrennt, den Kernel mitbenutzen. Dafür sind Container aber sehr ressourcenschonender Programme holen sich nur das Nötigste in den Container bzw. in die Sandbox und bleiben isoliert vom Hostsystem, das schützt vor Schadcode.</p>
	<p>Nach Gebrauch ist das "Löschen der Sandbox" üblich. Bekannte Programme sind <b>Docker</b>, <b>Sandboxie</b> für Windows und <b>Firejail</b> für Linux.</p>
	</article>
	<article class="content flow">
	<h3>Containervirtualisierung</h3>
	<p>Etwas ähnliches ist ein "<b>Container</b>" oder eine "<b>Sandbox</b>". Sie erzeugt eine Art Schattenkopie des Hostsystems auf virtuellem "Speicherplatz".</p>
	<p>Im Vergleich zu einer VM hat eine Containervirtualisierung mehr Einschränkungen weil die Programm dann als "Gäste" voneinander getrennt, den Kernel mitbenutzen. Dafür sind Container aber sehr ressourcenschonender Programme holen sich nur das Nötigste in den Container bzw. in die Sandbox und bleiben isoliert vom Hostsystem, das schützt vor Schadcode.</p>
	<p>Nach Gebrauch ist das "Löschen der Sandbox" üblich. Bekannte Programme sind <b>Docker</b>, <b>Sandboxie</b> für Windows und <b>Firejail</b> für Linux.</p>
	</article>
</div>
</main>
<footer>
   <?php readfile ('./includes/footer.htm') ?>
</footer>
</body>
</html>
