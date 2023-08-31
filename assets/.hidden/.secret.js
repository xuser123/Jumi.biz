const pre = document.pre;
const secretCode = '34573R366';
if (pre.id === secretCode) {
    body.innerHTML = "<?php readfile ('white/rabbit/.egg'); ?>";
    console.log('Easter egg triggered!');
}
