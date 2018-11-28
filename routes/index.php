<?php

use function src\slimConfiguration;
use App\Controllers\CepController;

$app = new \Slim\App(slimConfiguration());
$app->get('/buscaCepEndereco[/{cep_logradouro}]', CepController::class . ':getCepLogradouro');
$app->run();