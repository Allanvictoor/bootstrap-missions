/*img topo efeito visual*/
$(document).scroll(function () {
    var scroll = $(window).scrollTop();
    $("#js-hero img").css({
        width: (100 + scroll / 20) + "%"
    });
});
$(document).scroll(function () {
    var scroll = $(window).scrollTop();
    $("#js-hero-mob img").css({
        width: (100 + scroll / 3) + "%"
    });
});

/*cards desktop*/
$(document).ready(function () {
    $("#card-diag").click(function () {
        $("#caixa-mensagem").html("<p class='title-white'>O diagnóstico do novo coronavírus é feito com a coleta de\n" +
            "                    materiais\n" +
            "                    respiratórios (aspiração de vias aéreas ou indução de escarro).\n" +
            "                    É\n" +
            "                    necessária\n" +
            "                    a coleta de duas amostras na suspeita do coronavírus.\n" +
            "                    \n" +
            "                    Para confirmar a doença é necessário realizar exames de biologia\n" +
            "                    molecular\n" +
            "                    que detecte o RNA viral. O diagnóstico do novo coronavírus é\n" +
            "                    feito com a\n" +
            "                    coleta de amostra, que está indicada sempre que ocorrer a\n" +
            "                    identificação\n" +
            "                    de\n" +
            "                    caso suspeito.</p>");
    });


    $("#card-trat").click(function () {
        $("#caixa-mensagem").html("<p class='title-white'> Não existe tratamento específico para infecções causadas por\n" +
            "                    coronavírus\n" +
            "                    humano. No caso do coronavírus é indicado repouso e consumo de\n" +
            "                    bastante\n" +
            "                    água, além de algumas medidas adotadas para aliviar os sintomas,\n" +
            "                    conforme\n" +
            "                    cada caso, como, por exemplo:</p>\n" +
            "                <p class='title-white'>Uso de medicamento para dor e febre (antitérmicos e analgésicos).\n" +
            "                    Uso de umidificador no quarto ou tomar banho quente para\n" +
            "                    auxiliar no\n" +
            "                    alívio\n" +
            "                    da dor de garanta e tosse.\n" +
            "                    Assim que os primeiros sintomas surgirem, é fundamental procurar\n" +
            "                    ajuda\n" +
            "                    médica imediata para confirmar diagnóstico e iniciar o\n" +
            "                    tratamento.\n" +
            "                    Todos os pacientes que receberem alta durante os primeiros 07\n" +
            "                    dias do\n" +
            "                    início\n" +
            "                    do quadro (qualquer sintoma independente de febre), devem ser\n" +
            "                    alertados\n" +
            "                    para\n" +
            "                    a possibilidade de piora tardia do quadro clínico e sinais de\n" +
            "                    alerta de\n" +
            "                    complicações como: aparecimento de febre (podendo haver casos\n" +
            "                    iniciais\n" +
            "                    sem\n" +
            "                    febre), elevação ou reaparecimento de febre ou sinais\n" +
            "                    respiratórios,\n" +
            "                    taquicardia (aumento dos batimentos cardíacos), dor pleurítica\n" +
            "                    (dor no\n" +
            "                    peito), fadiga (cansaço) e dispnéia (falta de ar).</p>");
    });

    $("#card-viaj").click(function () {
        $("#caixa-mensagem").html("<p class='title-white'>\n" +
            "                    Os indivíduos que retornaram dos países monitorados dentro de um\n" +
            "                    período\n" +
            "                    de\n" +
            "                    14 dias e que apresentem febre e sintomas respiratórios devem\n" +
            "                    procurar a\n" +
            "                    unidade de saúde mais próxima imediatamente e informar sobre a\n" +
            "                    viagem.\n" +
            "                </p>");
    });
});
/*cards mobile*/
$(document).ready(function () {
    $("#card-diag-mob").click(function () {
        $("#caixa-mensagem-mob").html("<p class='title-white'>O diagnóstico do novo coronavírus é feito com a coleta de\n" +
            "                    materiais\n" +
            "                    respiratórios (aspiração de vias aéreas ou indução de escarro).\n" +
            "                    É\n" +
            "                    necessária\n" +
            "                    a coleta de duas amostras na suspeita do coronavírus.\n" +
            "                    \n" +
            "                    Para confirmar a doença é necessário realizar exames de biologia\n" +
            "                    molecular\n" +
            "                    que detecte o RNA viral. O diagnóstico do novo coronavírus é\n" +
            "                    feito com a\n" +
            "                    coleta de amostra, que está indicada sempre que ocorrer a\n" +
            "                    identificação\n" +
            "                    de\n" +
            "                    caso suspeito.</p>");
    });


    $("#card-trat-mob").click(function () {
        $("#caixa-mensagem-mob").html("<p class='title-white'> Não existe tratamento específico para infecções causadas por\n" +
            "                    coronavírus\n" +
            "                    humano. No caso do coronavírus é indicado repouso e consumo de\n" +
            "                    bastante\n" +
            "                    água, além de algumas medidas adotadas para aliviar os sintomas,\n" +
            "                    conforme\n" +
            "                    cada caso, como, por exemplo:</p>\n" +
            "                <p class='title-white'>Uso de medicamento para dor e febre (antitérmicos e analgésicos).\n" +
            "                    Uso de umidificador no quarto ou tomar banho quente para\n" +
            "                    auxiliar no\n" +
            "                    alívio\n" +
            "                    da dor de garanta e tosse.\n" +
            "                    Assim que os primeiros sintomas surgirem, é fundamental procurar\n" +
            "                    ajuda\n" +
            "                    médica imediata para confirmar diagnóstico e iniciar o\n" +
            "                    tratamento.\n" +
            "                    Todos os pacientes que receberem alta durante os primeiros 07\n" +
            "                    dias do\n" +
            "                    início\n" +
            "                    do quadro (qualquer sintoma independente de febre), devem ser\n" +
            "                    alertados\n" +
            "                    para\n" +
            "                    a possibilidade de piora tardia do quadro clínico e sinais de\n" +
            "                    alerta de\n" +
            "                    complicações como: aparecimento de febre (podendo haver casos\n" +
            "                    iniciais\n" +
            "                    sem\n" +
            "                    febre), elevação ou reaparecimento de febre ou sinais\n" +
            "                    respiratórios,\n" +
            "                    taquicardia (aumento dos batimentos cardíacos), dor pleurítica\n" +
            "                    (dor no\n" +
            "                    peito), fadiga (cansaço) e dispnéia (falta de ar).</p>");
    });

    $("#card-viaj-mob").click(function () {
        $("#caixa-mensagem-mob").html("<p class='title-white'>\n" +
            "                    Os indivíduos que retornaram dos países monitorados dentro de um\n" +
            "                    período\n" +
            "                    de\n" +
            "                    14 dias e que apresentem febre e sintomas respiratórios devem\n" +
            "                    procurar a\n" +
            "                    unidade de saúde mais próxima imediatamente e informar sobre a\n" +
            "                    viagem.\n" +
            "                </p>");
    });
});