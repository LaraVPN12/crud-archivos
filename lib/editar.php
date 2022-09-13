<?php
$archivo = 'texto.txt';
$content = $_POST['content'];
$abrir = fopen($archivo,'r+');
$escribir = fwrite($abrir, $content.trim());
fclose($abrir);
header('location: ../index.php');
