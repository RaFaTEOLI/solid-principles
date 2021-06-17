<?php 

require __DIR__."/vendor/autoload.php";

use src\Leitor;

/**
 * TXT
 */
$leitorTxt = new Leitor();
$leitorTxt->setDiretorio(__DIR__.DIRECTORY_SEPARATOR .'arquivos');
$leitorTxt->setArquivo('dados.txt');
$arrayTxt = $leitorTxt->lerArquivo();

/**
 * CSV
 */
$leitorCsv = new Leitor();
$leitorCsv->setDiretorio(__DIR__.DIRECTORY_SEPARATOR .'arquivos');
$leitorCsv->setArquivo('dados.csv');
$arrayCsv = $leitorCsv->lerArquivo();

/**
 * Merge Txt e Csv
 */
echo '<pre>';
print_r(array_merge($arrayTxt, $arrayCsv));
echo '</pre>';