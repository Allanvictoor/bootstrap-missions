$(document).ready(function(){
    $('#valor').mask('000.000');
});

var nomeEmpresa = [
    'CMIG4', 'BRDT3', 'MRVE3', 'ITUB4', 'CEAB3', 'BRFS3', 'COGN3', 'KLBN11', 'LCAM3', 'TGMA3'
];

var valores = [
    15.11, 28.45, 21.20, 32.81, 16.20, 30.57, 11.41, 21.15, 24.22, 40.29
];

var valoresMininmos = [
    15.11*100, 28.45*100, 21.20*100, 32.81*100, 16.20*100, 30.57*100, 11.41*100, 21.15*100, 24.22*100, 40.29*100
];

var lotes = [
    100, 100, 100, 100, 100, 100, 100, 100, 100, 100
];
var lotes_valor = [
    0, 0, 0, 0, 0, 0, 0, 0, 0, 0
];
var lotes_perc = [
    10, 10, 10, 10, 10, 10, 10, 10, 10, 10
];

var total_disponivel;

$(document).ready(function () {
    popularTabela();

    $("#form-valor").submit(function () {
        total_disponivel = parseFloat($("#valor").val());
        iniciar();
        popularTabela();
        event.preventDefault();
    });
});

function popularTabela() {
    var tableBody = $("#carteira tbody").empty();
    for (i = 0; i < valores.length; i++) {
        var tr = $("<tr></tr>");
        tr.append($("<td></td>").text(nomeEmpresa[i]));
        tr.append($("<td></td>").text(valores[i]+"R$"));
        tr.append($("<td></td>").text(lotes_perc[i]+"%"));
        tr.append($("<td></td>").text(lotes[i]));
        tr.append($("<td></td>").text(valoresMininmos[i]+" R$"));
        tableBody.append(tr);
    }
}
