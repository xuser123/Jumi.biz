<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi |Bits"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/Bits-Bytes"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
  <?php readfile ('./snippets/Mathematik/BIN-DEZ-umrechnen.htm') ?>
</article>
<article class="content flow">
  <?php readfile ('./snippets/Mathematik/HEX-BIN-DEZ.htm') ?>
</article>
<article class="content flow">
  <?php readfile ('./snippets/Mathematik/HEX-BIN-umrechnen.htm') ?>
</article>
<article class="content flow">
  <?php readfile ('./snippets/Mathematik/HEX-Notation.htm') ?>
</article>
<article class="content flow">
  <?php readfile ('./snippets/Mathematik/BIN-IP-Adresse.htm') ?>
</article>
</div>
</main>
<footer>
  <?php readfile ('./includes/footer.htm') ?>
</footer>
</body>
</html>
