<head>
    <?php
    include('../allan/tamplates/head.php');
    ?>
</head>
<body>
    <?php
    include('../allan/tamplates/nav.php')
    ?>



<div id="containerHead" class="container-fluid">
    <div class="container">
      <h2 class="text-center pt-5" style="color: white; font-weight: 800; font-size: 40px">Faça Login ou cadastre-se e
        comece a aprender hoje.</h2>
      <div class="row">

        <div id="imagembemvindo" class="col-sm p-5 ">

          <img class="img-fluid mx-auto d-block" src="imagens/dev.svg" alt="">
        </div>


      </div>
    </div>
  </div>

  <div id="posLogin" class="container-fluid">
    <div class="container pt-5 pb-5">
      <div>
        <h2 id="posLoginH2" class="text-white text-center p-5" style="font-size: 50px; font-weight: 900; background-color: #011b47; border-radius: 40px">Bem Vindo</h2>
        <h4></h4>
        <div class="card text-center mt-5 mb-5">
          <div class="card-header">
            Continuar Módulo HTML5
          </div>
          <div class="card-body">
            <img class="img-fluid" style="border-radius: 10px" src="imagens/cardcursohtml5.jpg" alt=""> <br>
            <a href="#" class="btn btn-primary mt-3">Continuar</a>
          </div>
          <div class="progress">
            <div class="progress-bar m-0 p-0" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
          </div>
          <div class="card-footer text-muted">
            Último acesso
            <p class="small"> 2 dias atrás</p>
            
          </div>
        </div>
      </div>
    </div>
  </div>



<?php
    include('../allan/tamplates/footer.php')
?>
</body>