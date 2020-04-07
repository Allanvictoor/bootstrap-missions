<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rg = filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING);

/*$name = $_POST['nome'];
$name = $_POST['manifestacao'];*/

$cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
$logradouro = filter_input(INPUT_POST, 'logradouro', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_STRING);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estados = filter_input(INPUT_POST, 'estados', FILTER_SANITIZE_STRING);
$país = filter_input(INPUT_POST, 'país', FILTER_SANITIZE_STRING);
$celular = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING);

$tipomanifestacao = filter_input(INPUT_POST, 'tipomanifestacao', FILTER_SANITIZE_STRING);
$relacionamento = filter_input(INPUT_POST, 'relacionamento', FILTER_SANITIZE_STRING);
$textoDoTextArea = $_POST['manifestacao'];


echo ("Nome: $nome <br>");
echo ("Nascimento: $nascimento <br>");
echo ("Email: $email <br>");
echo ("Cpf: $cpf <br>");
echo ("Rg: $rg <br><br>");

echo ("cep: $nome <br>");
echo ("logradouro: $logradouro <br>");
echo ("numero: $numero <br>");
echo ("complemento: $complemento <br>");
echo ("bairro: $bairro <br>");
echo ("cidade: $cidade <br>");
echo ("estados: $estados <br>");
echo ("país: $país <br>");
echo ("celular: $celular <br>");

echo ("tipo manifestação: $tipomanifestacao <br>");
echo ("relacionamento: $relacionamento <br>");
echo ("manifestacao: $textoDoTextArea <br>");
