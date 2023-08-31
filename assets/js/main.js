const body = document.body;
const secretCode = 'Schuhwerfing64';
if (body.id === secretCode) {
    body.innerHTML = "<?php readfile ('assets/.hidden/hint.php'); ?>"; // not the egg
    console.log('hint triggered!');
}
