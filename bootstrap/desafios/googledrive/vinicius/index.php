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
    <title>Meu Drive - Google Drive</title>
    <link href='https://www.gstatic.com/images/branding/product/1x/drive_48dp.png' rel='icon' type=''/>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container-fluid border-bottom sticky-top bg-white">
    <div class="row">
        <div class="col-2">
            <nav class="navbar navbar-white">
                <a><img src="https://www.gstatic.com/images/branding/product/1x/drive_48dp.png" alt="drive"><small
                            id="fonts-size" class="ml-2">Drive</small></a>
            </nav>
        </div>
        <div class="col-7">
            <div class="input-group mt-2 ml-2 border" id="cor-input-nav">
                <button id="form1" class="btn btn-default bg-light" type="button"><i class="fas fa-search"></i></button>
                <input id="form" class="form-control bg-light" type="search" placeholder="Pesquisar no Drive"
                       arial-label="Search"/>
                <button id="form1" class="btn btn-default bg-light" type="button"><i class="fas fa-sort-down"></i>
                </button>
            </div>
        </div>
        <div class="col mt-2 d-flex justify-content-end" id="fonts-size">
            <div class="mr-5">
                <i class="far fa-question-circle mr-2"></i>
                <i class="fas fa-cog"></i>
            </div>
            <div class="ml-2 mr-2">
                <i class="fas fa-th mr-2"></i>
                <i class="fas fa-user-circle"></i>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ">
    <div class="row">
        <div class="col-2">
            <div class="row">
                <div class="m-2">
                    <div class="btn shadow p-3 bg-white" id="novo-buttom">
                        <span class="card-text mt-2" id="fonts-size"><i
                                    class="fas fa-plus mx-2"></i><small>Novo</small></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="btn btn-light pr-5 w-100" id="button-lateral-azul">
                    <a id="link-buttom" href="meu-drive"
                       class="card-text d-flex justify-content-start">
                        <span><i class="mt-1 fas fa-caret-right"></i><i class="ml-2 mt-1 fab fa-google mr-2"></i><small>Meu Drive</small></span>
                    </a>
                </div>
                <div class="btn btn-light pr-5 w-100" id="button-lateral">
                    <a id="link-buttom-preto" href="compartilhados-comigo"
                       class="card-text d-flex justify-content-start">
                        <span><i class="mt-1 fas fa-caret-right"></i><i
                                    class="fas fa-user-friends ml-2 mr-1"></i><small>Compartilhados Comigo</small></span>
                    </a>
                </div>
                <div class="btn btn-light w-100" id="button-lateral">
                    <a id="link-buttom-preto" href="recentes"
                       class="card-text d-flex justify-content-start">
                        <span><i class="mt-1 fas fa-caret-right"></i><i class="ml-2 far fa-clock mr-1"></i><small>Recentes</small></span>
                    </a>
                </div>
                <div class="btn btn-light w-100" id="button-lateral">
                    <a id="link-buttom-preto" href="com-estrelas" class="card-text d-flex justify-content-start">
                        <span><i class="mt-1 fas fa-caret-right"></i><i class="far fa-star ml-2 mr-1"></i><small>Com Estrela</small></span>
                    </a>
                </div>
                <div class="btn btn-light w-100" id="button-lateral">
                    <a id="link-buttom-preto" href="lixeira" class="card-text d-flex justify-content-start">
                        <span><i class="mt-1 fas fa-caret-right"></i><i class="far fa-trash-alt mr-1 ml-2"></i><small>Lixeira</small></span>
                    </a>
                </div>
                <div class="border-top mt-2 w-100"></div>
                <div class="row">
                    <div class="col mt-3 ml-2">
                        <div class="col">
                            <i class="fas fa-list"><small class="ml-2">Armazenamento</small></i>
                        </div>
                    </div>
                    <div class="ml-5">
                        <div class="progress ml-3" id="progressbar">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <small class="ml-3">117.6 MB de 115 GB</small>
                    </div>
                    <div class="ml-5">
                        <div class="ml-2 mt-2">
                            <div class="card">
                                <div class="btn btn-light">
                                    <p class="card-text"<a href="" id="link-buttom-preto"><small>Comprar
                                            Armazenamento</small></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid">
                <div class="row border-bottom">
                    <div class="mt-2">
                        <div class="row ml-1">
                            <button type="button" class="btn btn-link dropdown-toggle" id="link-buttom-preto">Meu Drive</button>
                        </div>
                    </div>
                </div>
                <small><b>Acesso Rápido</b></small>
                <div class="row">
                    <?php for ($i = 0; $i < 4; $i++) { ?>
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
                <small><b>Pastas</b></small>
                <div class="row">
                    <?php for ($a = 0; $a < 8; $a++) { ?>
                        <div class="col-3 mt-2">
                            <div class="card">
                                <div class="btn btn-light">
                                    <p class="card-text"><i class="fas fa-folder mr-3"></i><b>arquivos</b></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row mt-3">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Proprietário</th>
                            <th scope="col">Última modificação</th>
                            <th scope="col">Tamanho do arquivo</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"><p class="card-text"><i class="fas fa-folder mr-3"></i><small>pastas</small>
                                </p></th>
                            <td><small>eu</small></td>
                            <td><small>22 de ago. de 2018 eu</small></td>
                            <td><small>-</small></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="card-text"><i class="far fa-file mr-3"></i><small>arquivos</small>
                                </p></th>
                            <td><small>eu</small></td>
                            <td><small>22 de ago. de 2018 eu</small></td>
                            <td><small>2 MG</small></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="card-text"><i
                                            class="far fa-file-image mr-3"></i><small>imagens</small></p></th>
                            <td><small>eu</small></td>
                            <td><small>22 de ago. de 2018 eu</small></td>
                            <td><small>2 MG</small></td>
                        </tr>
                        <tr>
                            <th scope="row"><p class="card-text"><i class="far fa-file-pdf mr-3"></i><small>PDF</small>
                                </p></th>
                            <td><small>eu</small></td>
                            <td><small>22 de ago. de 2018 eu</small></td>
                            <td><small>2 MG</small></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="border">
            <div class="ml-3 mr-3" id="fonts-sizem">
                <div class="mt-3">
                    <i class="far fa-grin-alt"></i>
                </div>
                <div class="mt-3">
                    <i class="far fa-grin-hearts"></i>
                </div>
                <div class="mt-3">
                    <i class="far fa-grin-squint-tears"></i>
                </div>
                <div class="mt-5">
                    <i class="fas fa-plus"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
