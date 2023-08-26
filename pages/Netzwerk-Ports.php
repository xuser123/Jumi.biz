<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi |Netzwerk-Ports"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/Network-Ports"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
    <p>Was machen <b>Ports</b>? Im Kontext erklärt: Um einen Brief an Jemanden zu schicken, der in einem Hochhaus wohnt und an seinem Briefkast, aus Schutzgründen, keinen Namen hat, braucht man Straße, Hausnummer, Postleitzahl und die Apartment-Nummer. Im Netzwerk besteht die Adresse aus 32 Bits. Also 32 Nullen und Einsen, bestehend aus 4 Oktette, die jeweils in Dezimal umgewandelt und mit Punkten getrennt, eine IP-Adresse bilden.</p>
    <table>
      <thead>
        <tr>
          <th>Bits</th>
          <th>IP</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>11000000 10101000 10110010 00100101</td>
          <td>192.168.178.37</td>
        </tr>
        <tr>
          <td>01000000 11101001 10100000 00000000</td>
          <td>64.233.160.0</td>
        </tr>
      </tbody>
    </table>
    <p>Die IP-Adresse bekommt jetzt noch eine <b>Port-Nummer</b>, die wie im o.g. Beispiel die Tür des Empfängers ist:</p>
    <ul>
      <li>
        <code>64.233.160.0:443</code>
      </li>
      <li>Port 443 überträgt verschlüsseltes HTTP einer Website (Google.com)</li>"https://jumi.biz/topics/pdf/
    </ul>
	<p>Eine Liste von Protokollen mit Zuordnung zu den Schichten:<br>
    <a id="dl-link" href="https://www.jumi.biz/content/pdf/OSI-Netzwerk-Protokolle.pdf" download="Win10-Installations-Tipps.pdf"><button id="dl-btn" name="button">PDF herunterladen</button></a><br>
	<span id="jumi-path"><a href="https://www.jumi.biz/content/pdf/OSI-Netzwerk-Protokolle.pdf">
	&#128279 PDF im aktuellen Tab öffnen</a> /
	<a href="https://www.jumi.biz/content/pdf/OSI-Netzwerk-Protokolle.pdf"
	target="blank">im neuen Tab öffnen</a></span><br>
	</article>
<article class="content flow">
    <p>Ports sind Teil der <b>Transportschicht</b> (Layer 4) im OSI-Modell. Mit der <b>Sitzungsschicht</b> (Layer 5) wird die Kommunikation gesteuert, über s.g. <b>Sessions</b> und <b>Sockets</b>.</p>
    <p>Ports können verschiedene Zustände haben:</p>
    <ul>
      <li>offen</li>
      <li>geschlossen</li>
      <li>gefiltert / geblockt.</li>
    </ul>
    <p>Man unterscheidet 2 Arten von Ports:</p>
    <ul>
      <li>
        <b>INBOUND</b> (Eingehend)
<ul><li>Computer / Server wartet auf eine Verbindungsanfrage</li></ul></li>
      <li>
        <b>OUTBOUND</b> (Ausgehend)
<ul><li>identifizieren sich mit ihrer Nummer bei den Server-Diensten</li></ul></li>
    </ul>
</article>
<article class="content flow">
    <p>Computer stellen Portanfragen um daraufhin Verbindungen vom Server entgegenzunehmen. Es gibt Standard-Ports, für bestimmte Programme fest-zugeordnete Portnummern. Das unverschlüsselte HTTP läuft auf Port 80 über TCP, der neue Sicherheitsstandard ist die verschlüsselte Variante (HTTPS) und benutzt Port 443.</p>
    <p>Ports sind wie Daten-Tunnel. Sie benutzen s.g. Stream- und Datagram Sockets. Entweder TCP oder UDP. Ein Programm kann über mehrere Ports laufen und beide Protokolle verwenden.</p>
    <p>Über <b>TCP</b> verlaufen Daten "zuverlässig" im bidirektionalem Datenaustausch, ein Verlust von Datenpacketen wird verhindert mit einer verbindungsorientierten Paketvermittlung.</p>
    <p>Bei <b>UDP</b> ist nicht wichtig dass ALLES ankommt, sondern KONSTANT übertragen wird, mit geduldeten Unterbrechungen, beispielsweise beim Stream gucken oder bei Sprachübertragungen. Daher ist der Durchlass hier größer, dafür aber unzuverlässiger als über TCP.</p>
</article>
<article class="content flow">
    <p>Mit der Linux Shell Befehl <code>ss -lntp</code> kann man Sockets untersuchen. Dateien die von Protokolle benutzt werden findet man mit <code>netstat -nano</code> und <code>lsof -i</code></p>
	<img src="pics/netstat1.jpg">
    <p>Zum Test kann man mit <code>nmap -sT -p- localhost</code> Ports abscannen, im Internet strafbar!</p>
    <p>Um einen Port zu schließen benutzt man <code>iptables -A INPUT -p tcp --dport 23 -m state --state NEW,ESTABLISHED j REJECT</code>, als eine Zeile. <b>REJECT</b> simuliert unreachable-Pakete und verschleiert die Firewall-Funktion, normalerweise geht auch <b>DROP</b>.</p>
</article>
<article class="content flow">
    <p>In Windows 10 gibt es für die PowerShell den Befehl <code>Get-NetTcpConnection</code> um aktive und lauschende Ports anzuzeigen.</p>
    <p>Unter Linux (Debian) findet man im APT Advanced Package Tool ein Programm namens <b>tcpdump</b>, das alle TCP-Pakete in Echtzeit monitarisieren kann, Befehl: <code>tcpdump -i eth0 -n net 192.168.0.0/24</code></p>
    <p>Logfiles werden mit <code>less /var/log/proxy/access.log</code> betrachtet oder mit <code>tail -f /var/log/proxy/access.log</code> verfolgt.</p>
</article>
</div>
</main>
<footer>
	<?php readfile ('./includes/footer.htm'); ?>
</footer>
</body>
</html>
