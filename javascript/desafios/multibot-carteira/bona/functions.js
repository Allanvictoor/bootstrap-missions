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

function calcularCarteiraValor() {
    total_carteira = 0;
    for (i=0; i<lotes_valor.length; i++) {
        total_carteira = total_carteira + lotes_valor[i];
    }
}

function calcularLoteValor() {
    for (i=0; i<lotes_valor.length; i++) {
        lotes_valor[i] = valores[i] * lotes[i];
    }
}

function calcularLotePercentual() {
    lotes_perc[0] = (lotes_perc[0] < 100) ? (lotes_valor[0]*100) / total_carteira : 100;
    lotes_perc[1] = (lotes_perc[1] < 100) ? (lotes_valor[1]*100) / total_carteira : 100;
    lotes_perc[2] = (lotes_perc[2] < 100) ? (lotes_valor[2]*100) / total_carteira : 100;
    lotes_perc[3] = (lotes_perc[3] < 100) ? (lotes_valor[3]*100) / total_carteira : 100;
    lotes_perc[4] = (lotes_perc[4] < 100) ? (lotes_valor[4]*100) / total_carteira : 100;
    lotes_perc[5] = (lotes_perc[5] < 100) ? (lotes_valor[5]*100) / total_carteira : 100;
    lotes_perc[6] = (lotes_perc[6] < 100) ? (lotes_valor[6]*100) / total_carteira : 100;
    lotes_perc[7] = (lotes_perc[7] < 100) ? (lotes_valor[7]*100) / total_carteira : 100;
    lotes_perc[8] = (lotes_perc[8] < 100) ? (lotes_valor[8]*100) / total_carteira : 100;
    lotes_perc[9] = (lotes_perc[9] < 100) ? (lotes_valor[9]*100) / total_carteira : 100;

    // console.log('Percentuais são: ', p1_lote_perc, p2_lote_perc, p3_lote_perc, p4_lote_perc, p5_lote_perc, p6_lote_perc, p7_lote_perc, p8_lote_perc, p9_lote_perc, p10_lote_perc);
}

function adicionarLoteNoPapel(papel) {
    lotes[papel] = lotes[papel] + 100;
    atualizaValores();
    if (total_carteira > total_disponivel) {
        lotes[papel] = lotes[papel] - 100;
        atualizaValores();
        lotes_perc[papel] = 100;
    }
}

function retornarPapelMenorPercentual() {
    var tenhoMenorParaRetornar = false;
    for (i=0; i<lotes_perc.length; i++) {
        if (lotes_perc[i] < 100) {
            tenhoMenorParaRetornar = true;
        }
    }
    if (tenhoMenorParaRetornar == false) {
        return false;
    }

    var menor = 99999999999;
    var menorPapel = false;
    for (i=0; i<lotes_perc.length; i++) {
        if (lotes_perc[i] < menor) {
            menor = lotes_perc[i];
            menorPapel = i;
        }
    }

    // console.log('O menor percentual é: ', menor, menorPapel);
    return menorPapel;
}