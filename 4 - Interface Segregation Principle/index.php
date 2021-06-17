<?php

require __DIR__.'/vendor/autoload.php';

use src\Dao\ContratoModel;
use src\Dao\LeadModel;
use src\Dao\UsuarioModel;

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br>';

$leadModel = new LeadModel();
print_r($leadModel);
echo '<br>';

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo '<br>';