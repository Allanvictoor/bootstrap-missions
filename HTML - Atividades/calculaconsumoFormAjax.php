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

if (! $formSubmetido) {
    return '';
}
?>

<div class="alert alert-success" role="alert">
    Vale a pena <strong><?php echo $compensa ?></strong>
</div>

<table class="table">
    <thead>
    <tr>
        <th>Tipo</th>
        <th>Consumo por Km</th>
        <th>Índice</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Gasolina</td>
        <td><?php echo $consumoDeGasolina ?? '-' ?></td>
        <td><?php echo $indiceGasolina ?? '-' ?></td>
    </tr>
    <tr>
        <td>Álcool</td>
        <td><?php echo $consumoDeAlcool ?? '-' ?></td>
        <td><?php echo $indiceAlcool ?? '-' ?></td>
    </tr>
    </tbody>
</table>
