<?php 
$thumb = "unidad4.jpg";
$img = imagecreatefromjpeg($thumb);
$ix = imagesx($img);
$iy = imagesy($img);
$fx = 150;
$fy = 150;
$fondo = imagecreate($fx, $fy);
imagecopyresized($fondo,$img,0,0,0,0,$fx,$fy,$ix,$iy);
header('Content-type: image/jpeg');
imagejpeg($fondo); ?>