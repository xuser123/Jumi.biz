<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi |Rechnerarchitektur"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/Rechnerarchitektur"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
    <h3>Rechnerarchitektur</h3>
    <p><strong>EVA-Prinzip</strong></p>
    <ul>
    <li>Eingabe, Verarbeitung und Ausgabe</li>
    <li>&quot;Evaluation&quot;</li>
    </ul>
</article>
<article class="content flow">
    <p><strong>PC-Bauformen</strong></p>
    <ul>
    <li>Big Tower</li>
    <li>Midi</li>
    <li>Small Fan Factor &quot;Slim&quot;</li>
    <li>Mini Tower</li>
    </ul>
</article>
<article class="content flow">
    <p><strong>Workstation Vorteile gegenüber Home-PCs</strong></p>
    <ul>
    <li>Arbeitszeiten-Optimierte-Leistung</li>
    <li>Hardware-Zuverlässigkeit</li>
    <li>Schneller Support (Reparatur &amp; Dienstleistung)</li>
    <li>Werkzeuglose Systemänderungen</li>
    <li>ECC-Speicher (Automatische Korrektur)</li>
    <li>XEON-Prozessoren von Intel</li>
    <li>OpenGL Grafik mit DirectX
    <ul>
    <li>Geeignet für Industrie</li>
    </ul></li>
    </ul>
</article>
<article class="content flow">
    <p><strong>Geräteklassen</strong></p>
    <ul>
    <li>Desktop-PC</li>
    <li>Notebook</li>
    <li>All-In-One
    <ul>
    <li>Platz sparend</li>
    <li>Nicht aufrüstbar</li>
    </ul></li>
    <li>Netbook</li>
    <li>Barebone
    <ul>
    <li>Kleiner Formfaktor</li>
    <li>Aufrüstbar</li>
    <li>Gaming</li>
    </ul></li>
    <li>Tablet</li>
    <li>Smartphone</li>
    <li>eBook-Reader</li>
    <li>Server</li>
    <li>Dockingstations</li>
    </ul>
</article>
<article class="content flow">
    <p><strong>Aufbau - Hauptplatine</strong></p>
    <p>Bussystem</p>
    <ul>
    <li>Überträgt Bit-Impulse</li>
    <li>Zentral mit Steuerwerk, CPU, RAM und I/O verbunden</li>
    </ul>
    <p>Steuerwerk</p>
    <ul>
    <li>Speichert und liest Daten aus dem Arbeitsspeicher</li>
    </ul>
    <p>Rechenwerk (Prozessor / CPU)</p>
    <ul>
    <li>Block für Rechnungen</li>
    <li>Direkte Verbindung zum Arbeitspeicher</li>
    </ul>
    <p>Arbeitsspeicher (RAM)</p>
    <ul>
    <li>Braucht Betriebspannung</li>
    <li>Flüchtiger, volatiler Speicher</li>
    <li>&quot;Random Access Memory&quot;</li>
    </ul>
    <p>Ein- und Ausgabewerk (I/O)</p>
    <p>Chipsatz</p>
    <ul>
    <li>bestimmt welche Komponenten benutzt werden</li>
    <li>Verbindung der Ein- und Ausgabegeräte / Hardware</li>
    </ul>
</article>
<article class="content flow">
    <p><strong>Hyper-V Virtual Machines</strong></p>
    <ul>
    <li>Speicherort C:/hyperV/</li>
    <li>&quot;Generation 2&quot; auswählen</li>
    <li>dynamischen Speicher auswählen</li>
    <li>2 Ghz und 2 Prozessoren auswählen</li>
    <li>Switch: Domain(Privat) / Extern</li>
    <li>VM-Einstellungen in &quot;Eigenschaften&quot;</li>
    <li>PXE-Boot mit Tastendruck überspringen</li>
    <li>&quot;Sicheren Start aktivieren&quot;-Kästchen bei Linux-VMs deaktivieren
    <ul>
    <li>Option ist nur für Windows-VMs</li>
    </ul></li>
    </ul>
</article>
<article class="content flow">
    <p><strong>Netzwerkkabel</strong></p>
    <ul>
    <li>UTP (Unshielded Twisted Pair)
    <ul>
    <li>Keine elektromagnetische Abschirmung</li>
    <li>Sollte nicht (mehr) verwendet werden</li>
    </ul></li>
    <li>FTP (Foiled Twisted Pair)
    <ul>
    <li>Seltene Signalstörungen</li>
    <li>Cat6 ist typisch und reicht i.R.</li>
    </ul></li>
    </ul>
</article>
<article class="content flow">
    <p><strong>Road Map - CPUs</strong></p>
    <p>Prozessoren</p>
    <ul>
    <li>Alder Lake (Sockel 1700) Prozessor Familie</li>
    <li>Von Skylake bis Icelake Generation
    <ul>
    <li>kommen noch häufig vor</li>
    <li>10nm Technologie bis Ende 2022</li>
    <li>7nm Technologie ab 2022</li>
    </ul></li>
    <li>AMD auf 5nm ab 2022
    <ul>
    <li>Konkurrenz für Intel</li>
    </ul></li>
    </ul>
</article>
<article class="content flow">
    <p><strong>Arbeitsspeicher</strong></p>
    <ul>
    <li>Random Access Memory (RAM) benötigt Stromspannung um Daten zu speichern.</li>
    <li>Dynamic RAM (DRAM)
    <ul>
    <li>Capacitors (Ladung = 1, keine Ladung = 0), konstante Erneuerung</li>
    <li>Speicher flüchtig bei Stromunterbrechung</li>
    </ul></li>
    <li>Schneller als Festplatte</li>
    <li>direkt mit dem Prozessor verbunden</li>
    <li>2 oder 4 Speicher-Steckplätzen des Mainboards benutzen (empfohlen)</li>
    <li>Lädt Daten eines Programms von der Festplatte
    <ul>
    <li>gibt sie zur Verarbeitung an Prozessor weiter</li>
    </ul></li>
    <li>Synchronous Dynamic RAM (SDRAM)
    <ul>
    <li>Synchronisiert mit der System-Zeit</li>
    <li>Schneller als DRAM</li>
    </ul></li>
    <li>DIMM 64 Bits / SIMM 32 Bits / Rimm 1600 MB/s</li>
    <li>Double Data Rate (DDR)
    <ul>
    <li>184 Pins</li>
    <li>Gegensatz zu Single Data Rate (SDR):
    <ul>
    <li>Verwendet steigende UND fallende Flanken des Taktsignals</li>
    </ul></li>
    <li>Takt und Bandbreite im Produktnamen
    <ul>
    <li>z.B.: &quot;DDR-333Mhz PC-2700&quot;
    <ul>
    <li>Takt = 333Mhz / Bandbreite = (333 x 8 Bytes) 2700 MB/s</li>
    </ul></li>
    </ul></li>
    </ul></li>
    <li>DDR2
    <ul>
    <li>Doppelt so schnelle Datenübertragung von DDR(1)</li>
    <li>Weniger Stromverbrauch</li>
    <li>240 Pins</li>
    </ul></li>
    <li>DDR3
    <ul>
    <li>Doppelt so schnelle Datenübertragung von DDR2</li>
    <li>Nicht kombinierbar mit DDR, DDR2 oder DDR4</li>
    <li>240 Pins, anderer Anschluss</li>
    </ul></li>
    <li>DDR4
    <ul>
    <li>Maximal 34 MB/s  !!!!!!!!!!!! &lt;--- RICHTIG?</li>
    <li>288 Pins</li>
    </ul></li>
    <li>Error Correcting Code (ECC)
    <ul>
    <li>Prüft Korrektheit der Prozesse eines Speichermoduls
    <ul>
    <li>Paritätsprüfung</li>
    </ul></li>
    <li>DDR5 mit Extra-Datenleitung</li>
    <li>Fehlerhafter Bit wird zurückgegeben und neu berechnet</li>
    <li>1 Extra-Chip auf der Platine</li>
    </ul></li>
    </ul>
</article>
<article class="content flow">
    <p><strong>Festplatten</strong></p>
    <ul>
    <li>Solid State Drive (SSD)</li>
    <li>Peripheral Component Interconnect Express (PCIe)
    <ul>
    <li>Chipsatz-Periphärie Steckplätze</li>
    </ul></li>
    <li>M2-SSD (PCIe 3.0)
    <ul>
    <li>2 Anschluss-Kerben</li>
    </ul></li>
    <li>M2-SSD (PCIe 4.0)
    <ul>
    <li>Linke Anschluss-Kerbe</li>
    <li>Schnellere SATA-Technik</li>
    </ul></li>
    <li>2,5 Zoll SSD
    <ul>
    <li>SATA 3 (750 MB/s)</li>
    <li>Lautlos, stoßfest, energiearm &amp; kühl</li>
    </ul></li>
    <li>Serial ATA (SATA) 
    <ul>
    <li>ATA = &quot;abbreviated from Attachment&quot;</li>
    <li>7200 Umdrehungen</li>
    <li>5400 Umdrehungen
    <ul>
    <li>Langsamer aber mehr Bandbreite</li>
    </ul></li>
    </ul></li>
    </ul>
    <p><strong>Storage-Beispiel</strong></p>
    <ul>
    <li>Schicht 1: Schnelle SSD</li>
    <li>Schicht 2: SSD / SATA
    <ul>
    <li>Ungebrauchte Daten</li>
    <li>Verlagerung</li>
    </ul></li>
    <li>Schicht 3: SATA
    <ul>
    <li>Archiv</li>
    <li>Backups</li>
    </ul></li>
    </ul>
    </article>
</div>
</main>
<footer>
	<?php readfile ('./includes/footer.htm'); ?>
</footer>
</body>
</html>
