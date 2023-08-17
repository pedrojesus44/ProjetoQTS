<?php
require('CalculadoraDiasTrabalhados.class.php');
require('CalculadoraValorTotal.class.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dataAdmissao = $_POST["data_admissao"];
    $dataDemissao = $_POST["data_demissao"];

    $calculadoraDiasTrabalhados = new CalculadoraDiasTrabalhados($dataAdmissao, $dataDemissao);
    $diasTrabalhados = $calculadoraDiasTrabalhados->calcularDiasTrabalhados();

    $calculadoraValorTotal = new CalculadoraValorTotal($diasTrabalhados);
    $valorTotal = $calculadoraValorTotal->calcularValorTotal();
}