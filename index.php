<!DOCTYPE html><html lang="de">
<head>
<title>jumi.biz</title>

<!-- ### Metadaten -->
<?php readfile ('templates/basic.htm'); ?>

<!-- ### Layout -->
<?php readfile ('templates/layout.htm'); ?>

</head>
<body>
<header>

<!-- ### MENU -->
<?php readfile ('includes/menu.php'); ?>

<!-- ### NAVIGATION -->
	<script src="assets/js/menu.js"></script>

</header>
<main>

<!-- ### MAIN -->
<?php readfile ('pages/main.php'); ?>

</main>
<footer>

<!-- ### IMPRESSUM -->
<?php readfile ('includes/impressum.htm'); ?>

</footer>

<!-- ### Extras -->
	<script src="assets/js/modal.js"></script>
    <script src="includes/extras/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

</body>
</html>
