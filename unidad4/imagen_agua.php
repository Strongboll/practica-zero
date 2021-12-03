<?php 
$base = 'image.png';
$agua = 'marca.png';
$ibase = imagecreatefrompng($base);
$iagua = imagecreatefrompng($agua);
imagecopy($ibase, $iagua, 360, 200, 0, 0, imagesx($iagua), imagesy($iagua));
header('Content-type: image/png');
imagepng($ibase); ?>