<?php
session_start();
$_POST = $_SESSION;
session_destroy();
?>

<!doctype html>
<html lang="en">
<head>
    <?php
    include("../vinicius/head.php");
    ?>
</head>
<body>
<?php
include("../vinicius/nav.php")
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="mt-2">
                <h3>Manifestações</h3>
            </div>
            <div class="jumbotron">
                <h3>Online</h3>
                <p>
                    Para manifestações online, clique no botão "Cadastrar manifestação" e , caso opte por se
                    identificar,
                    insira os seus dados e a manifestações nos campos exigidos. Um protocolo será gerado para
                    acompanhamento.
                    Caso opte pelo anonimato, insira apenas os dados da manifestações.
                </p>
                <div>
                    <a href="ouvidoria.php">
                        <input class="btn btn-danger" type="submit" name="Cadastrar manifestação"
                               value="Cadastrar manifestação"/>
                    </a>
                </div>
            </div>
            <div class="jumbotron">
                <h3>
                    Consultar manifestações
                </h3>
                <p>
                    Número da ocorrência
                </p>
                <div class="input">
                    <input type="text" name="Número da ocorrência"/>
                </div>
                <div class="mt-2">
                    <input type="submit" class="btn btn-danger" name="Consultar"
                           value="Consultar"/>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include("../vinicius/rodape.php");
    ?>
</body>
</html>
