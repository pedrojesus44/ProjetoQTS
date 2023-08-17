<?php

class CalculadoraValorTotal {
    private $diasTrabalhados;
    private $valorPorHora = 12.50;

    public function __construct($diasTrabalhados) {
        $this->diasTrabalhados = $diasTrabalhados;
    }

    public function calcularValorTotal() {
        return $this->diasTrabalhados * 8 * $this->valorPorHora;
    }
}