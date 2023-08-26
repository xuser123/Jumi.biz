<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi |Win10"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/Win10-Installation"; include ('./includes/nav.php'); ?>
</header>
<script src="navibar.js"></script>
<main>
	<div class="grid-container">
	<article class="content flow">
	<b>Windows10 Installations-Tipps</b>
	<a id="dl-link" href="https://www.jumi.biz/content/pdf/Win10-Installations-Tipps.pdf"
	download="Win10-Installations-Tipps.pdf"><button id="dl-btn" name="button">PDF herunterladen</button></a>
	<a id="dl-link" href="https://www.jumi.biz/content/pdf/Win10-Installations-Tipps.pdf">
	<button id="dl-btn" name="button">Im aktuellen Tab öffnen</button></a>
	<a id="dl-link" href="https://www.jumi.biz/content/pdf/Win10-Installations-Tipps.pdf"
	target="blank"><button id="dl-btn" name="button">In neuem Tab öffnen</button></a><br>
	<object type="application/pdf" data="pdf/Win10-Installations-Tipps.pdf" width="90%" height="710px">
	</article>
	</div>
	<script src="content/includes/dl-button.js"></script>
</main>
<footer>
	<?php readfile ('./includes/footer.htm'); ?>
</footer>
</body>
</html>
