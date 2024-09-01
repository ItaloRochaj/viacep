<?php

namespace App\WebService;

class ViaCep {

    /**
     * Consulta um CEP no serviço ViaCEP
     *
     * @param string $cep
     * @return void
     */
    public static function consultarCep($cep) {
        echo "<pre>";
        print_r($cep);
        echo "</pre>";
        exit;
    }
}
