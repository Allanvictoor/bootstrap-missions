<?php
include 'calaculaconsumofunctions.php';

$dados = $_POST;

$tanque = $dados['tanque'] ?? null;
$valorGasolina = $dados['valorGasolina'] ?? null;
$caminhoComGasolina = $dados['caminhoComGasolina'] ?? null;
$valorAlcool = $dados['valorAlcool'] ?? null;
$caminhoComAlcool = $dados['caminhoComAlcool'] ?? null;

$formSubmetido = false;
if ($tanque && $valorGasolina && $caminhoComGasolina && $valorAlcool && $caminhoComAlcool) {
    $formSubmetido = true;

    $consumoDeGasolina = calculaConsumo($tanque, $caminhoComGasolina);
    $indiceGasolina = calculaIndice($consumoDeGasolina, $valorGasolina);
    $consumoDeAlcool = calculaConsumo($tanque, $caminhoComAlcool);
    $indiceAlcool = calculaIndice($consumoDeAlcool, $valorAlcool);
    $compensa = definirCombustivel($indiceGasolina, $indiceAlcool);
}