<?php

require __DIR__ . '/vendor/autoload.php';

use App\WebService\ViaCep;

// Verifica se o CEP foi passado como argumento de linha de comando
if ($argc < 2) {
    die("Cep não definido\n");
}

// Obtém o CEP do argumento da linha de comando
$cep = $argv[1];

// Inicializa o cURL
$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => 'https://viacep.com.br/ws/' . $cep . '/json/',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => 'GET',
]);

$response = curl_exec($curl);

curl_close($curl);

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
