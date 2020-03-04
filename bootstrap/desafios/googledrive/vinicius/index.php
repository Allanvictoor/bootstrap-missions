<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9404a074e1.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <title>Diagramação</title>
</head>

<body>
<div class="container-fluid border-bottom">
    <div class="row">
        <div class="col">
            <nav class="navbar navbar-white bg-white justify-content-between" style="margin-top: -5px">
                <a class="navbar-brand"><img src="https://www.gstatic.com/images/branding/product/1x/drive_48dp.png" alt="">Drive</a>
        </div>
        <div class="col-6">
            <form class="form-group my-3">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar no Drive"
                       arial-label="Search">
            </form>
        </div>
        <div class="col" style="margin-top: 15px;">
            <img src="tela.png" width="300px" style="margin-top: -8px;">
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="row">

            </div>
        </div>
        <div class="col-9"">
            <div class="container-fluid">
                <div class="row border-bottom">

                    <button type="button" class="btn btn-link mt-2" style="text-decoration: none; color: black"><h5>Meu Drive</h5></button>

                </div>
                <small><b>Acesso Rápido</b></small>
                <div class="row">
                    <?php for ($i > 0; $i < 4; $i++){ ?>
                        <div class="col-3">
                            <div class="card" style="width: 13rem;">
                                <div class="border border-primary">
                                    <img class="card-img-top" src="viva.jpg" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Vivaweb</h5>
                                    <p class="card-text">Vivaweb</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <small><b>Arquivos</b></small>
                <div class="row">
                    <?php for ($a > 0; $a < 12; $a++){ ?>
                        <div class="col-2 mt-2'">
                            <div class="card" >
                                <div class="card-body">
                                    <p class="card-text"><b>arquivos</b></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
