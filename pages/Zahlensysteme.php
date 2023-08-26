<!DOCTYPE html>
<html lang="de">
<head>
<?php $Seite = "Jumi |Zahlen"; include ('./includes/header.php'); ?>
</head>
<body>
<header>
<?php $Pfad = "/Zahlensysteme"; include ('./includes/nav.php'); ?>
</header>
<main>
<div class="grid-container">
<article class="content flow">
  <?php readfile ('./snippets/Mathematik/Zahlensysteme-Basis-1-3.htm') ?>
</article>
<article class="content flow">
  <?php readfile ('./snippets/Mathematik/Zahlensysteme-Basis-4-6.htm') ?>
</article>
<article class="content flow">
  <?php readfile ('./snippets/Mathematik/Zahlensysteme-Basis-7-9.htm') ?>
</article>
<article class="content flow">
<!-- Leer -->
</article>
<article class="content flow">
  <div style="display: flex; flex-wrap: wrap; justify-content: space-around;">
    <?php readfile ('./snippets/Mathematik/Zahlensysteme-Basis-10-12.htm') ?>
  </div>
  <div style="display: flex; flex-wrap: wrap; justify-content: space-around;">
    <?php readfile ('./snippets/Mathematik/Zahlensysteme-Basis-13-16.htm') ?>
  </div>
</article>
</div>
</main>
<footer>
  <?php readfile ('./includes/footer.htm') ?>
</footer>
</body>
</html>
