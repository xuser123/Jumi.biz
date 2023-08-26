<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi |Python"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/Python Basics"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
<h1><b>Python Basics</b></h1>
<h4>Datentypen</h4>
<ul>
<li><b>Strings</b> = Zeichenkette</li>
<li><b>Integer</b> = Ganzzahlen</li>
<li><b>Float</b> = Rationale, reelle Zahlen
<ul>
<li>wie Zum Beispiel 1.5</li>
<li>Punkt statt Komma verwenden ;)</li>
</ul>
</li>
<li><b>Variable</b> = Unbekannte, veränderliche Größe</li>
<li><b>Arrays</b> = Anordnung
<ul>
<li>list = geordnete Liste (“mutable”)</li>
<li>tuble = ungeordnete Liste (“immutable”)</li>
<li>set = Liste mit einzigartigen Werten (“unique”)</li>
<li>dict = Liste mit doppelten Werten
<ul>
<li><i>Collection of key-value pairs</i></li>
</ul>
</li>
</ul>
</li>
<li><b>boolean</b> = Boolisches Gesetz
<ul>
<li>True oder False</li>
</ul>
</li>
</ul>
</article>
<article class="content flow">
<h4>Array-Liste ergänzen</h4>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-Listen-addieren.py') ?>
</code></pre>
<h4>Array-Listen addieren</h4>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-Liste-mit-Listen.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>append Funktion</h4>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-Array-append.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>String auslesen</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-String-auslesen.py') ?>
</code></pre>
</article>
</div>
<div class="grid-container">
<article class="content flow">
<h4>Strings aus Strings</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-Strings-aus-Strings.py') ?>
</code></pre>
<h4>Strings verändern</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-Strings-veraendern.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>len-Funktion</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-len-Funktion.py') ?>
</code></pre>
<h4>elif und else</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-elif-und-else.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>Boolisches elif</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-boolisches-elif-else.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>while Schleife</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-while-Schleife.py') ?>
</code></pre>
<h4>for-Schleife</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-for-Schleife.py') ?>
</code></pre>
</article>
</div>
<div class="grid-container">
<article class="content flow">
<h4>for-in-if-Schleife</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-for-in-if-Schleife.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>range, for, in, break und continue</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-range-for-in-break-continue.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>break und continue mit for und if</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-break-continue-for-if.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>for-in-range</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-for-in-range.py') ?>
</code></pre>
<h4>Funktionen</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-Funktion.py') ?>
</code></pre>
</article>
</div>
<div class="grid-container">
<article class="content flow">
<h4>Parameter übergeben</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-Parameter-uebergeben.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>Mehrere Parameter übergeben</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-mehrere-Parameter-uebergeben.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>GPIO Programmierung</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-GPIO-Programmierung.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>GPIO-Layout installieren</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-GPIO-Layout.py') ?>
</code></pre>
</article>
</div>
<div class="grid-container">
<article class="content flow">
<h4>Python 3 Passwort-Generator</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-3-Passwortgenerator.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>PDF-Binder</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-PDF-Binder.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>PDF-Verschlüsselung (128-bit)</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-PDF-Verschluesselung.py') ?>
</code></pre>
</article>
<article class="content flow">
<h4>PDF-Verschlüsselung (128-bit)</h2>
<pre><code class="language-python">
<?php readfile ('./snippets/Skripte/Python-PDF-Verschluesselung.py') ?>
</code></pre>
</article>
</div>
<footer>
<?php readfile ('./includes/footer.htm'); ?>
</footer>
</div>
</main>
</body>
</html>


