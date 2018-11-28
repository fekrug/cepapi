<?php

namespace App\DAO\MySQL\cepapi;

class LogradourosDAO extends Conexao {
    public function __construct(){
        parent::__construct();
 
    }
   
    public function getCepLogradouro($cep_logradouro): array {
        
        $query = $this->pdo->prepare(
            "SELECT l.NO_LOGRADOURO_CEP AS cep,
            l.DS_LOGRADOURO_NOME AS logradouro,
            b.ds_bairro_nome AS bairro,
            c.ds_cidade_nome AS cidade,
            u.ds_uf_sigla AS uf
            FROM logradouros AS l
            INNER JOIN bairros AS b
            ON l.CD_BAIRRO = b.cd_bairro
            INNER JOIN cidades AS c
            ON b.cd_cidade = c.cd_cidade
            INNER JOIN uf as u
            ON c.cd_uf = u.cd_uf
            WHERE l.NO_LOGRADOURO_CEP = ? OR l.DS_LOGRADOURO_NOME LIKE ? LIMIT 1000");
       
        $cep = "%{$cep_logradouro}%";
        $query->execute([$cep_logradouro, $cep]);
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
        $numRows = $query->rowCount();
        $data = [];

        if($numRows > 0) {
            foreach($result as $local) {
                $local['cep'] = substr($local['cep'], 0, 5) . '-' . substr($local['cep'], 5, 3);
                $data[] = $local;
            }
        } else {
            $data = ["Message" => "Dados não encontrados."];
        }

        return $data;
        
    }
    
}