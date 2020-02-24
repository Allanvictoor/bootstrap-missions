function calculaConsumo(tanque, caminho) {
    return caminho / tanque;
}
function calculaIndice(consumo, valor) {
    return consumo / valor;
}
function definirCombustivel(indiceGasolina, indiceAlcool) {
    if (indiceGasolina < indiceAlcool) {
        return "alcool";
    }
    if (indiceGasolina > indiceAlcool) {
        return "gasolina";
    }

    return "ambos";
}