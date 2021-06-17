<?php

require __DIR__.'/vendor/autoload.php';

use src\Poligono;
use src\Poligonos\Retangulo;
use src\Poligonos\Quadrado;

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do retângulo: ' . $poligono->getArea() . '</h3>';

$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setAltura(10);
echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3>Área do quadrado: ' . $poligono->getArea() . '</h3>';

/*
$retangulo = new Retangulo();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>Área do retângulo: ' . $retangulo->getArea() . '</h3>';

$quadrado = new Quadrado();
$quadrado->setAltura(5);
echo '<h3>Área do quadrado: ' . $quadrado->getArea() . '</h3>';

$retangulo = new Quadrado();
$retangulo->setAltura(5);
$retangulo->setLargura(10);
echo '<h3>LSP - Área do retângulo: ' . $retangulo->getArea() . '</h3>';
*/