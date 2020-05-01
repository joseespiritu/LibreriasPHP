<?php
// Requiere la libreria phpthumb
require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.jpg';

$thumb = new PHPThumb\GD($foto_original);

// Redimensionar
$thumb->resize(50, 50);

// Recortar
// $thumb->crop(250, 250, 120, 120);
// Recortar desde el centro
$thumb->cropFromCenter(20,10);

$thumb->show();
$thumb->save($guardar_en);

?>