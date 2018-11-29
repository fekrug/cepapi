<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use App\DAO\MySQL\cepapi\LogradourosDAO;

final class CepController {
    
    public function getCepLogradouro(Request $request, Response $response, array $args) {

        $arg = $args['cep_logradouro'] ?? "";
        if(strlen($arg) <= 9) $arg = str_replace('-','',$arg);
        $logradoudosDAO = new logradourosDAO();
        $response = $response->withJson($logradoudosDAO->getCepLogradouro($arg));
  
        return $response;
    }

}