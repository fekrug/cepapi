**API PARA BUSCA DE CEP E ENDEREÇOS**

**Api para consulta de CEPs e Endereços**






**Exemplo URL da API de consulta por CEP.**

Exemplo URL de busca por CEP.

`Exemplo: http://localhost/apicep/buscaCepEndereco/89201-000`

`Exemplo: http://localhost/apicep/buscaCepEndereco/89201000`

**Retorno:**

```json
{
    "cep": "89201-000",
    "logradouro": "Rua do Príncipe - até 428/429",
    "bairro": "Centro",
    "cidade": "Joinville",
    "uf": "SC"
}
```

**xemplo URL da API de consulta por Rua.**

Exemplo URL de busca por rua.

`Exemplo: http://localhost/apicep/buscaCepEndereco/Pfuetzenreuter`


**Retorno:**

```json
  {
"cep": "89219-200",
"logradouro": "Rua Otto Pfuetzenreuter - até 581/582",
"bairro": "Costa e Silva",
"cidade": "Joinville",
"uf": "SC"
},
{
"cep": "89219-202",
"logradouro": "Rua Otto Pfuetzenreuter - de 583/584 ao fim",
"bairro": "Costa e Silva",
"cidade": "Joinville",
"uf": "SC"
}
```



**Informações Adicionais:**

|  Arquivo | Local  |
| ------------ | ------------ |
| Bando de dados MySQL  | /database/cepapi.sql  |
| Configurações conexação MySQL  | env.php  |
| Arquivo de Exemplo Front-End  | /exemplo/index.html  |

***Desenvolvido com PHP, SlimFramework e Composer***


