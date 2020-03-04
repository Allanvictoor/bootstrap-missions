function iniciar() {
    atualizaValores();
    if (total_disponivel < total_carteira) {
        alert('Não é possível calcular');
        return false;
    }

    calcularLoteInicial();
    do {
        atualizaValores();
        papelMenor = retornarPapelMenorPercentual();
        adicionarLoteNoPapel(papelMenor);
    } while (papelMenor != false);
}

function calcularLoteInicial() {
    var maximo_por_lote = total_disponivel / 10;
    for (i=0; i<lotes.length; i++) {
        lotes[i] = Math.floor(maximo_por_lote / (valores[i]*100)) * 100;
    }

    var tenhoTodosLotesMinimos = true;
    for (i=0; i<lotes.length; i++) {
        if (lotes[i] == 0) {
            tenhoTodosLotesMinimos = false;
        }
    }
    if (tenhoTodosLotesMinimos == false) {
        for (i=0; i<lotes.length; i++) {
            lotes[i] = 100;
        }
    }

    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    adicionarLoteNoPapel(papelMenor);
}

function atualizaValores() {
    calcularLoteValor();
    calcularCarteiraValor();
    calcularLotePercentual();
}

const somar = function (soma, item) {
    return soma + item;
};

function calcularCarteiraValor() {
    total_carteira = lotes_valor.reduce(somar);
}

function calcularLoteValor() {
    for (i=0; i<lotes_valor.length; i++) {
        lotes_valor[i] = valores[i] * lotes[i];
    }
}

function calcularLotePercentual() {
    for (i=0; i<lotes_perc.length; i++) {
        lotes_perc[i] = (lotes_perc[i] < 100) ? (lotes_valor[i]*100) / total_carteira : 100;
    }
}

function adicionarLoteNoPapel(papel) {
    lotes[papel] = lotes[papel] + 100;
    atualizaValores();
    if (total_carteira > total_disponivel) {
        lotes[papel] -= 100;
        atualizaValores();
        lotes_perc[papel] = 100;
    }
}

function retornarPapelMenorPercentual() {
    total_perc = lotes_perc.reduce(somar);
    if (total_perc == lotes_perc.length * 100) {
        return false;
    }

    return retornarMenor();
}

function retornarMenor() {
    var menor = 999999999999999999999999;
    var menorPapel = false;
    for (i=0; i<lotes_perc.length; i++) {
        if (lotes_perc[i] < menor) {
            menor = lotes_perc[i];
            menorPapel = i;
        }
    }
    return menorPapel;
}