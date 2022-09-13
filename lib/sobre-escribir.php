<?php
function Rewrite(){
    $archivo = 'texto.txt';
    $abrir = fopen($archivo, 'r+');
    $size = filesize($archivo);
    $leer = fread($abrir, $size);
    $content = $_POST['content'];
    $position = ftell($abrir);

    if($position == $size){
        fseek($abrir, 0);
    }
    fwrite($abrir, $content.trim());
    fclose($abrir);
    return $content;
}
?>