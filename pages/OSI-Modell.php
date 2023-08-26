<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi |OSI-Modell"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/OSI-Modell"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
    <h2>OSI Open Systems Interconnection</h2>
    <p>Das OSI Modell beschreibt wie Daten übermittelt werden.
    Es hat 7 Schichten, in denen Daten verkapselt und weiterverkapselt werden. 
    Die Nummerierung ist aber nicht als Reihenfolge zu verstehen,
    da die Informationen in beide Richtungen fließen. Daher auch "ISO-OSI-Modell" genannt.</p>
    <img src="pics/osi.jpg" width="90%">
	</article>
	<article class="content flow">
	<h3>OSI-Schichten</h3>
    <h4>Layer 1 Physical Bitübertragungsschicht</h4>
    <p>Verantwortlich für die Übertragung und den Empfang unstrukturierter Rohdaten zwischen einem Gerät und einem physischen Übertragungsmedium. Es wandelt die digitalen Bits in elektrische, Funk- oder optische Signale um.</p>
	</article>
	<article class="content flow">
    <h4>Layer 2 Data Link Sicherungsschicht</h4>
    <p>Die Datenverbindungsschicht ermöglicht den Knoten-zu-Knoten-Datenübertragung, eine Verbindung zwischen zwei direkt verbundenen Knoten. Es erkennt und korrigiert möglicherweise Fehler, die in der physischen Schicht auftreten können. IEEE 802 teilt die Datenverbindungsschicht in zwei Unterschichten. Es wandelt die digitalen Bits in elektrische, Funk- oder optische Signale um. Layer-Spezifikationen definieren Eigenschaften wie Spannungspegel, den Zeitpunkt der Spannungsänderungen, der physikalischen Datenraten, maximale Übertragungsabstände, Modulationsschema, Kanalzugriffsverfahren und physikalische Anschlüsse.</p>
    </article>
	<article class="content flow">
    <h4>Layer 3 Network Vermittlungsschicht</h4>
    <p>Die Netzwerkschicht stellt das Funktions- und Verfahrensmittel zur Übertragung von Paketen von einem Knoten zur anderen in "verschiedenen Netzwerken" bereit. Ein Netzwerk ist ein Medium, an dem viele Knoten angeschlossen werden können, auf denen jeder Knoten eine Adresse hat und die mit ihm angeschlossenen Knoten aufweist, um Nachrichten an andere mit ihm angeschlossene Knoten zu übertragen, indem er lediglich den Inhalt einer Nachricht und der Adresse des Ziels anbietet Knoten und das Netzwerk lassen Sie den Weg finden, um die Nachricht an den Zielknoten zu liefern und möglicherweise durch Zwischenknoten zu leiten.</p>
    </article>
	<article class="content flow">
    <h4>Layer 4 Transport Transportschicht</h4>
    <p>Die Transportschicht stellt das Funktions- und Verfahrensmittel zur Übertragung von Datensequenzen mit variabler Länge von einer Quelle an einen Zielhost bereit, während die Qualität der Servicefunktionen aufrechterhält. Die Transportschicht steuert die Zuverlässigkeit eines bestimmten Links durch Durchflusssteuerung, Segmentierung / Desegmentierung und Fehlersteuerung.</p>
    </article>
	<article class="content flow">
    <h4>Layer 5 Session Sitzungsschicht</h4>
    <p>Die Sitzungsschicht steuert die Dialoge (Verbindungen) zwischen Computern. Es etabliert, verwaltet und beendet die Verbindungen zwischen der lokalen und entfernten Anwendung. Es bietet Full-Duplex, Halbduplex- oder Simplex-Betrieb und etabliert Verfahren zum Prüfen, Aufhängen, Neustart und Beenden einer Sitzung.</p>
    </article>
	<article class="content flow">
    <h4>Layer 6 Presentation Darstellungsschicht</h4>
    <p>Die Präsentationsschicht stellt den Kontext zwischen Anwendungsschicht-Entitäten her, in dem die Application-Layer-Entitäten unterschiedliche Syntax und Semantik verwenden können, wenn der Präsentationsdienst eine Abbildung zwischen ihnen bietet. Wenn ein Mapping verfügbar ist, werden Präsentationsprotokolldateneinheiten in Session-Protokolldateneinheiten eingekapselt und den Protokollstapel übergeben.</p>
    </article>
	<article class="content flow">
    <h4>Layer 7 Application Anwendungsschicht</h4>
    <p>Die Anwendungsschicht ist die OSI-Schicht, die dem Endbenutzer am nächsten ist, dh sowohl die OSI-Anwendungsschicht als auch der Benutzer interagieren direkt mit der Softwareanwendung. Diese Schicht interagiert mit Softwareanwendungen, die eine kommunizierende Komponente implementieren.</p>
    </article>
	<article class="content flow">
    <img src="pics/matroschka.jpg" width="216px"><img src="pics/iso.png" width="216px">
    <p>Eine Liste von Protokollen mit Zuordnung zu den Schichten: <a href="https://www.jumi.biz/topics/pdf/ports.pdf">&#128279 Netzwerk-Protokolle.pdf</a></p>
	</article>
	<article class="content flow">
    <p>Das <b>TCP/IP-Modell</b> hat den gleichen Aufbau wie im OSI-Modell aber besteht aus 4 Schichten:</p>
    <ul>
      <li>Netzzugangsschicht</li>
      <li>Internetschicht</li>
      <li>Transportschicht</li>
      <li>Anwendungsschicht</li>
    </ul>
    <p>Wenn man von TCP/IP spricht, meint man manchmal die komplette Internetprotokollfamilie, hierzu zählen ca. 500 Protokolle.</p>
</article>
</div>
</main>
<footer>
        <?php readfile ('./includes/footer.htm'); ?>
</footer>
</body>
</html>
