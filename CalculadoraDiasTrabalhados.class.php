<?php

class CalculadoraDiasTrabalhados {
    private $dataAdmissao;
    private $dataDemissao;

    public function __construct($dataAdmissao, $dataDemissao) {
        $this->dataAdmissao = new DateTime($dataAdmissao);
        $this->dataDemissao = new DateTime($dataDemissao);
    }

    public function calcularDiasTrabalhados() {
        $interval = $this->dataAdmissao->diff($this->dataDemissao);
        return $interval->days + 1; // Adicionar 1 para incluir o último dia
    }
}