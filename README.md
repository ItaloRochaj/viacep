

  ## Busca por CEP integrado diretamente aos serviços dos Correios


## Como utilizar



### Realizando uma consulta



``` js
JSON
URL: viacep.com.br/ws/01001000/json/

    {
      "cep": "01001-000",
      "logradouro": "Praça da Sé",
      "complemento": "lado ímpar",
      "unidade": "",
      "bairro": "Sé",
      "localidade": "São Paulo",
      "uf": "SP",
      "estado": "São Paulo",
      "regiao": "Sudeste",
      "ibge": "3550308",
      "gia": "1004",
      "ddd": "11",
      "siafi": "7107"
    }


### Você também poderá passar o CEP como Inteiro

Em muitos sistemas o CEP é utilizado erroneamente como um Inteiro (e com isto cortando todos os zeros à esquerda). Caso este seja o seu caso, não há problema, pois a biblioteca irá preencher os caracteres faltantes na String, por exemplo:

``` js
import cep from 'cep-promise'

// enviando sem ter um zero à esquerda do CEP "05010000"
cep(5010000)
  .then(console.log)

  // {
  //   "cep":  "05010000",
  //   "state":  "SP",
  //   "city":  "São Paulo",
  //   "street":  "Rua Caiubí",
  //   "neighborhood":  "Perdizes",
  // }
```

### Quando o CEP não é encontrado

Neste caso será retornado um `"service_error"` e por ser multifornecedor, a biblioteca irá rejeitar a Promise apenas quando tiver a resposta negativa de todos os fornecedores.

``` js

// Converte a resposta JSON em um array PHP
$data = json_decode($response, true);

// Verifica se a conversão foi bem-sucedida e exibe os dados
if ($data && isset($data['cep'])) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
} else {
    echo "Erro ao consultar o CEP ou na conversão da resposta JSON.\n";
}


Instalação

composer install

```
```


Autor

Italo Codes.
