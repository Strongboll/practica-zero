<?php
$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];
$cbd = mysqli_connect('localhost','root','','phpavanzado1806') or exit('No se pudo conectar a la BD');
mysqli_query($cbd , "INSERT INTO clases VALUES (DEFAULT, '$unidad', '$fecha')"	);
mysqli_close($cbd);
header('Location: ../unidad1.php?exito');
?>