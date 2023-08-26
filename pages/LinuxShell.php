<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi |LinuxShell"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "Administration/LinuxShell"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
	<h3>Dateibefehle</h3>
	<?php readfile ('./snippets/Administration/LinuxShell-Datei-Befehle.htm'); ?>
</article>
<article class="content flow">
	<h3>Systembefehle</h3>
	<?php readfile ('./snippets/Administration/LinuxShell-System-Befehle.htm'); ?>
</article>
<article class="content flow">
	<h3>Netzwerkbefehle<h3>
	<?php readfile ('./snippets/Administration/LinuxShell-Netzwerk-Befehle.htm'); ?>
</article>
<article class="content flow">
	<h3>Vorlagen<h3>
	<?php readfile ('./snippets/Administration/LinuxShell-Befehl-Vorlagen.htm'); ?>
</article>
</div>
</main>
<footer>
	<?php readfile ('./includes/footer.htm'); ?>
</footer>
</body>
</html>
