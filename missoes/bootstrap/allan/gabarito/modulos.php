<head>
    <?php
    include('../gabarito/template/head.php');
    ?>
</head>
<body>
    <?php
    include('../gabarito/template/nav.php')
    ?>


 <!--Cards dos cursos-->
 <div class="container-fluid backgroundCursosModulo">
        <div class="container">
          <h2 class="text-center pt-3">Módulos do curso de desenvolvimento web</h2>
          <div class="row ">
            <div class="col-sm p-3">
              <div class="card mx-auto d-block " style="width: 18rem;">
                <img class="card-img-top" src="imagens/cardhtml5.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Módulo HTML5</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                    title="Continuar Módulo">Continuar Módulo</a>
                </div>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0"
                    aria-valuemax="100">45%</div>
                </div>
              </div>

            </div>
            <div  class="col-sm p-3" >
              <div class="card mx-auto d-block" style="width: 18rem;">
                <img class="card-img-top" src="imagens/cardcss3.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Módulo CSS3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                    title="Iniciar Módulo">Iniciar Módulo</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row ">
            <div class="col-sm p-3">
              <div class="card mx-auto d-block" style="width: 18rem;">
                <img class="card-img-top" src="imagens/cardbootstrap.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Módulo Bootstrap</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                    title="Iniciar Módulo">Iniciar Módulo</a>
                </div>
              </div>
            </div>
            <div class="col-sm p-3">
              <div class="card mx-auto d-block" style="width: 18rem;">
                <img class="card-img-top" src="imagens/cardjs.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Módulo Javascript</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                  <a href="#" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom"
                    title="Iniciar Módulo">Iniciar Módulo</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
    include('../gabarito/template/footer.php')
?>
</body>