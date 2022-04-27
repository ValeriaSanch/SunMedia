<?php
require_once 'Models/Ad.php';
require_once 'Models/Component.php';

$attributesComponent1 = ['url' => 'url.image.jpg', 'format' => 'jpg', 'weight' => '300MB'];
$attributesComponent2 = ['text' => 'ESTO ES UNA PRUEBA DEL TEXTO QUE ESTAMOS EXCRIBIENDO'];

$component1 = new Component(1, 'Prueba Imagen', 'Image', '30x40', 300, 300, $attributesComponent1);
$component2 = new Component(2, 'Prueba Texto', 'Text', '50x40', 200, 300, $attributesComponent2);
$component3 = new Component(3, 'Prueba Video', 'Video', '10x40', 1920, 1080);
$component3->setUrlAttribute('video.mp4')->setFormatAttribute('mp4')->setWeightAttribute(1.2, 'GB');

$components = [$component1, $component2, $component3];

$ad = new Ad();
$ad->setId(1);
$ad->setStatus(Ad::STATUS_PUBLISHED);
$ad->setName('Prueba 1');
$ad->setCategory('Prueba');
$ad->setComponents($components);

$ad2 = new Ad();
$ad2->setId(2);
$ad2->setStatus(Ad::STATUS_STOPPED);
$ad2->setName('Prueba 2');
$ad2->setCategory('Prueba');
$ad2->setComponents($components);

var_dump($ad);
var_dump($ad2);
