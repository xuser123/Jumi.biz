<!DOCTYPE html>
<html lang="de">
<head>
   <?php $Seite = "Jumi |HTML-CSS"; include ('./includes/header.php'); ?>
<script src="includes/xml.min.js"></script>
</head>
<body>
<header>
<?php $Pfad = "/HTML"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
<h3>Hypertext-Markup Language (HTML)</h3>
<p>Jeder Quellcode einer Website beginnt mit <code>&lt;<mark>!doctype</mark> html&gt;</code>,
das ist ein so genannter "Tag" und definiert den Dokumenten-Typ.
So erkennt der Browser dass es sich um ein <b>HTML</b>-Dokument handelt.
Üblicherweise folgt dann <code> &lt;html&gt;</code>,
mit Sprachenangabe: <code>&lt;html lang="<mark>de</mark>"&gt</code>.
Fast alle Tags markieren Begin oder Ende eines Inhalts,
nicht aber so genannte "standalone-tags",
wie z.B. <code>&lt;br&gt;</code> welcher einen Zeilenumbruch bewirkt.
Am Ende des Quellcodes wird mit <code>&lt;<mark>/</mark>html&gt;</code>
die HTML-Auszeichnung abgeschlossen,
alle Elemente müssen korrekt verkapselt sein.</p>
<p>Nach dem html-tag kommt der head-Tag,
haupsächlich zum betiteln des Browserfensters.
Weitere Informationen wie Zeichenkodierung (<i>UTF-8 für üäö</i>) und
Metadaten zur Website sind auch möglich.
<code>&lt;meta charset="<mark>utf-8</mark>"&gt;</code>
Sogennante Standalone-Tags brauchen keinen Endtag.
Suchmaschienen registrieren den Inhalt des "describtion"-Containers.</p>
<code>&lt;meta name="<mark>description</mark>"<br>
content="IT methods for beginners in Project Website of Jumi"&gt;</code>
<p>Der eigentliche Webseiteninhalt steckt im Bereich zwischen <code>&lt;body&gt;</code> und <code>&lt;/body&gt;</code>. Im Beispiel mit einer Überschrift und Text darunter:</p>
<code>&lt;body&gt;<br>&lt;h1&gt;<mark>Große Überschrift</mark>&lt;/h1&gt;<br>&lt;p&gt;<mark>Paragraph für die Überschrift</mark>&lt;/p&gt;<br>&lt;/body&gt;</code><p>Mit dem "Script"-Tag werden Skripte (<i>außerhalb HTML</i>) eingebettet.<code>&lt;script src="<mark>EinSkript.js</mark>"&gt;&lt;/script&gt;</code>Dabei muss aber die Position dieses Tags beachtet werden, weil im HTML-Dokument alles von oben nach unten ausgeführt wird.</p>
</article>
<article class="content flow">
<h2>Quellcode und Internetbrowser</h2>
<p>Über das <i>Hypertext-Transfer-Protokoll</i> (<b>HTTP</b>) kommuniziert der <b>Server</b> zum <b>Browser</b>.</p>
<img src="pics/htm.png" width="210px"><img src="pics/htm3.png" width="210px"><img src="pics/htm2.png" width="210px">
</article>
<article class="content flow">
<h3>Cascading Style Sheets (CSS)</h3>
<p>Das Erscheinungsbild wird dann aus einer "<b>CSS</b>"-Datei ausgelesen und im Head-Bereich verlinkt. So wird vermieden dass man den Stil mehrerer Websites nicht wiederholt coden muss.</p>
<code>&lt;link rel="stylesheet" href="<mark>style.css</mark>"&gt;</code>
<p>Der Code in der CSS-Datei hat eine eigene Scriptsprache die sich um die Darstellung der Inhalte im html-body kümmert. Hier hier steht das "p" für alle Paragraphen:<br>
<code><mark>p</mark> {<br>font-family: arial, sans-serif;<br>line-height: 150%;<br>}</code></p>
<p>Das geht mit allen HTML Haupt-Elementen, wie "body" und "div". "<b>div</b>"-Tags spielen eine große Rolle. Sie definieren so genannte "Blöcke".Div steht für Division (Teilung). Diesen Blöcken kann man ID's geben. z.B.:<code>&lt;div class="<mark>Objekt-Klasse</mark>" id="<mark>eineID</mark>"&gt;</code>Auf diese ID's wird dann in externen Skripten zurückgegriffen. Die Tag-Namen, "div's" &amp; Objekte mit class oder id sind wie Code-Brücken zu anderen Scriptsprachen, welche die Seitenausgabe mitbestimmen.</p>
</article>
<article class="content flow">
<h3>HTML-Basics:</h3>
<object class="window-content" type="text/plain" data="snippets/Webdesign/HTML-basic-template.txt"></object>
<object class="window-content" type="text/plain" data="snippets/Webdesign/HTML-Meta-Vorlagen.txt"></object>
<object class="window-content" type="text/html" data="snippets/Webdesign/HTML-form.htm"></object>
<object class="window-content" type="text/plain" data="snippets/Webdesign/HTML-Container.txt"></object>
</article>
</div>
<div class="grid-container">
<article class="content flow">
<h3>HTML-Inhalte:</h3>
<object class="window-content" type="text/plain" data="snippets/Webdesign/HTML-Image.txt"></object>
<object class="window-content" type="text/plain" data="snippets/Webdesign/HTML-List.txt"></object>
<object class="window-content" type="text/plain" data="snippets/Webdesign/HTML-Links.txt"></object>
<object class="window-content" type="text/plain" data="snippets/Webdesign/HTML-Input.txt"></object>
</article>
<article class="content flow">
<h3><a href="https://www.jumi.biz/main/includes/style.css">CSS</a>-Styling</h3>
<object class="window-content" type="text/plain" data="snippets/Webdesign/HTML-CSS-Styling.txt"></object>
<object class="window-content" type="text/plain" data="includes/style.css"></object>
</article>
<article class="content flow">
<h4>PLATZHALTER</h2>
<pre><code class="xml">
<?php require "snippets/Webdesign/HTML-basic-template.xml"; ?>
</code></pre>
</article>
<article class="content flow">
<h4>PLATZHALTER</h2>
<pre><code class="language-xml">
<?php require "snippets/Webdesign/HTML-Meta.xml";?>
</code></pre>
</article>
<article class="content flow">
<h4>PLATZHALTER</h2>
<pre><code class="language-xml">
<?php readfile ('./snippets/Webdesign/HTML-form.xml') ?>
</code></pre>
</article>
<article class="content flow">
<h4>PLATZHALTER</h2>
<pre><code class="language-xml">
<?php readfile ('./snippets/Webdesign/HTML-Container.xml') ?>
</code></pre>
</article>
</div>
<div class="grid-container">
<article class="content flow">
<h4>PLATZHALTER</h2>
<pre><code class="language-xml">
<?php readfile ('./snippets/Webdesign/HTML-Image.xml') ?>
</code></pre>
</article>
<article class="content flow">
<h4>PLATZHALTER</h2>
<pre><code class="language-xml">
<?php readfile ('./snippets/Webdesign/HTML-List.xml') ?>
</code></pre>
</article>
<article class="content flow">
<h4>PLATZHALTER</h2>
<pre><code class="language-xml">
<?php readfile ('./snippets/Webdesign/HTML-Links.xml') ?>
</code></pre>
</article>
<article class="content flow">
<h4>PLATZHALTER</h2>
<pre><code class="language-xml">
<?php readfile ('./snippets/Webdesign/HTML-Input.xml') ?>
</code></pre>
</article>
</div>
</main>
<footer>
   <?php readfile ('./includes/footer.htm') ?>
</footer>
</body>
</html>
