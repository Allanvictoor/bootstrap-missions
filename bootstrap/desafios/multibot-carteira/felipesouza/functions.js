function iniciar() {
    atualizaValores();
    if (total_disponivel < total_carteira) {
        alert('Não é possível calcular');
        return false;
    }

    calcularLoteInicial();

    // ciclo 1
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // ciclo 2
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // ciclo 3
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);

    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);


    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);


    // começar novo ciclo
    atualizaValores();
    papelMenor = retornarPapelMenorPercentual();
    if (papelMenor == false) {
        return;
    }
    adicionarLoteNoPapel(papelMenor);
}

function calcularLoteInicial() {
    var maximo_por_lote = total_disponivel / 10;

    p1_lote = Math.floor(maximo_por_lote / (p1_valor*100)) * 100;
    p2_lote = Math.floor(maximo_por_lote / (p2_valor*100)) * 100;
    p3_lote = Math.floor(maximo_por_lote / (p3_valor*100)) * 100;
    p4_lote = Math.floor(maximo_por_lote / (p4_valor*100)) * 100;
    p5_lote = Math.floor(maximo_por_lote / (p5_valor*100)) * 100;
    p6_lote = Math.floor(maximo_por_lote / (p6_valor*100)) * 100;
    p7_lote = Math.floor(maximo_por_lote / (p7_valor*100)) * 100;
    p8_lote = Math.floor(maximo_por_lote / (p8_valor*100)) * 100;
    p9_lote = Math.floor(maximo_por_lote / (p9_valor*100)) * 100;
    p10_lote = Math.floor(maximo_por_lote / (p10_valor*100)) * 100;

    if (p1_lote == 0
        || p2_lote == 0 || p3_lote == 0 || p4_lote == 0
        || p5_lote == 0 || p6_lote == 0 || p7_lote == 0
        || p8_lote == 0 || p9_lote == 0 || p10_lote == 0
    ) {
        p1_lote = 100;
        p2_lote = 100;
        p3_lote = 100;
        p4_lote = 100;
        p5_lote = 100;
        p6_lote = 100;
        p7_lote = 100;
        p8_lote = 100;
        p9_lote = 100;
        p10_lote = 100;
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
    total_carteira = p1_lote_valor + p2_lote_valor + p3_lote_valor + p4_lote_valor + p5_lote_valor + p6_lote_valor + p7_lote_valor + p8_lote_valor +  p9_lote_valor  + p10_lote_valor;
    // console.log('Total da Carteira: ', total_carteira);
}

function calcularLoteValor() {
    p1_lote_valor = p1_valor * p1_lote;
    p2_lote_valor = p2_valor * p2_lote;
    p3_lote_valor = p3_valor * p3_lote;
    p4_lote_valor = p4_valor * p4_lote;
    p5_lote_valor = p5_valor * p5_lote;
    p6_lote_valor = p6_valor * p6_lote;
    p7_lote_valor = p7_valor * p7_lote;
    p8_lote_valor = p8_valor * p8_lote;
    p9_lote_valor = p9_valor * p9_lote;
    p10_lote_valor = p10_valor * p10_lote;
}

function calcularLotePercentual() {
    p1_lote_perc = (p1_lote_perc < 100) ? (p1_lote_valor*100) / total_carteira : 100;
    p2_lote_perc = (p2_lote_perc < 100) ? (p2_lote_valor*100) / total_carteira : 100;
    p3_lote_perc = (p3_lote_perc < 100) ? (p3_lote_valor*100) / total_carteira : 100;
    p4_lote_perc = (p4_lote_perc < 100) ? (p4_lote_valor*100) / total_carteira : 100;
    p5_lote_perc = (p5_lote_perc < 100) ? (p5_lote_valor*100) / total_carteira : 100;
    p6_lote_perc = (p6_lote_perc < 100) ? (p6_lote_valor*100) / total_carteira : 100;
    p7_lote_perc = (p7_lote_perc < 100) ? (p7_lote_valor*100) / total_carteira : 100;
    p8_lote_perc = (p8_lote_perc < 100) ? (p8_lote_valor*100) / total_carteira : 100;
    p9_lote_perc = (p9_lote_perc < 100) ? (p9_lote_valor*100) / total_carteira : 100;
    p10_lote_perc = (p10_lote_perc < 100) ? (p10_lote_valor*100) / total_carteira : 100;

    // console.log('Percentuais são: ', p1_lote_perc, p2_lote_perc, p3_lote_perc, p4_lote_perc, p5_lote_perc, p6_lote_perc, p7_lote_perc, p8_lote_perc, p9_lote_perc, p10_lote_perc);
}

function adicionarLoteNoPapel(papel) {
    switch (papel) {
        case 1:
            p1_lote = p1_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p1_lote = p1_lote - 100;
                atualizaValores();
                p1_lote_perc = 100;
            }
            break;
        case 2:
            p2_lote = p2_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p2_lote = p2_lote - 100;
                atualizaValores();
                p2_lote_perc = 100;
            }
            break;
        case 3:
            p3_lote = p3_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p3_lote = p3_lote - 100;
                atualizaValores();
                p3_lote_perc = 100;
            }
            break;
        case 4:
            p4_lote = p4_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p4_lote = p4_lote - 100;
                atualizaValores();
                p4_lote_perc = 100;
            }
            break;
        case 5:
            p5_lote = p5_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p5_lote = p5_lote - 100;
                atualizaValores();
                p5_lote_perc = 100;
            }
            break;
        case 6:
            p6_lote = p6_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p6_lote = p6_lote - 100;
                atualizaValores();
                p6_lote_perc = 100;
            }
            break;
        case 7:
            p7_lote = p7_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p7_lote = p7_lote - 100;
                atualizaValores();
                p7_lote_perc = 100;
            }
            break;
        case 8:
            p8_lote = p8_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p8_lote = p8_lote - 100;
                atualizaValores();
                p8_lote_perc = 100;
            }
            break;
        case 9:
            p9_lote = p9_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p9_lote = p9_lote - 100;
                atualizaValores();
                p9_lote_perc = 100;
            }
            break;
        case 10:
            p10_lote = p10_lote + 100;
            atualizaValores();
            if (total_carteira > total_disponivel) {
                p10_lote = p10_lote - 100;
                atualizaValores();
                p10_lote_perc = 100;
            }
            break;
    }
}

function retornarPapelMenorPercentual() {
    if (p1_lote_perc == 100
        && p2_lote_perc == 100 && p3_lote_perc == 100 && p4_lote_perc == 100
        && p5_lote_perc == 100 && p6_lote_perc == 100 && p7_lote_perc == 100
        && p8_lote_perc == 100 && p9_lote_perc == 100 && p10_lote_perc == 100
    ) {
        return false;
    }

    var menor = 10000000000000;
    var menorPapel = false;

    if (p1_lote_perc < menor) {
        menor = p1_lote_perc;
        menorPapel = 1;
    }
    if (p2_lote_perc < menor) {
        menor = p2_lote_perc;
        menorPapel = 2;
    }
    if (p3_lote_perc < menor) {
        menor = p3_lote_perc;
        menorPapel = 3;
    }
    if (p4_lote_perc < menor) {
        menor = p4_lote_perc;
        menorPapel = 4;
    }
    if (p5_lote_perc < menor) {
        menor = p5_lote_perc;
        menorPapel = 5;
    }
    if (p6_lote_perc < menor) {
        menor = p6_lote_perc;
        menorPapel = 6;
    }
    if (p7_lote_perc < menor) {
        menor = p7_lote_perc;
        menorPapel = 7;
    }
    if (p8_lote_perc < menor) {
        menor = p8_lote_perc;
        menorPapel = 8;
    }
    if (p9_lote_perc < menor) {
        menor = p9_lote_perc;
        menorPapel = 9;
    }
    if (p10_lote_perc < menor) {
        menor = p10_lote_perc;
        menorPapel = 10;
    }

    // console.log('O menor percentual é: ', menor, menorPapel);
    return menorPapel;
}
