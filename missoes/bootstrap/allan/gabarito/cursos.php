<head>
  <?php
  include('../gabarito/template/head.php');
  ?>
</head>

<body>
  <?php
  include('../gabarito/template/nav.php')
  ?>


  <div class="container-fluid pt-5" style="background-color: #f1f1f1">
    <div class="container ">
      <div class="row">
        <div class="col-sm my-auto mx-auto d-block ">
          <div class="col-sm">

            <div class="col-sm">

            </div>
          </div>
          <div id="curso" class="row">
            <div class="col-sm ">
              <p style="text-align: center; font-weight: 800;"><strong>HTML5</strong></p>
              <img style="width: 8rem" class="mx-auto d-block" src="/imagens/html.png" alt="">
              <p class="text-center p-2">HTML5 é uma linguagem de marcação para a World Wide Web e é uma tecnologia
                chave da Internet, originalmente proposto por Opera Software. É a quinta versão da linguagem HTML.</p>
            </div>
            <div class="col-sm ">
              <p style="text-align: center; font-weight: 800;"><strong>CSS3</strong></p>
              <img style="width: 8rem" class="mx-auto d-block" src="/imagens/css3.png" alt="">
              <p class="text-center p-2">CSS3 é a terceira mais nova versão das famosas Cascading Style Sheets (ou
                simplesmente CSS), pela qual se define estilos para um projeto web (página de internet).</p>
            </div>
            <div class="col-sm">
              <p style="text-align: center; font-weight: 800;"><strong>BOOTSTRAP</strong></p>
              <img style="width: 8rem" class="mx-auto d-block" src="/imagens/bootstrap.png" alt="">
              <p class="text-center p-2">O Bootstrap oferece uma enorme variedade de Plugins e temas compatíveis com
                outros frameworks. Além disto, possui integração com qualquer linguagem de programação.</p>
            </div>
            <div class="col-sm">
              <p style="text-align: center; font-weight: 800;"><strong>JS</strong></p>
              <img style="width: 8rem" class="mx-auto d-block" src="/imagens/javascript-1.svg" alt="">
              <p class="text-center p-2">JavaScript é uma linguagem de programação interpretada estruturada, de
                script em alto nível com tipagem dinâmica fraca e multiparadigma. </p>
            </div>
          </div>
        </div>

      </div>
      <h4 class="text-center m-3">Próximos Cursos na nossa plataforma</h4>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner  pb-5">
          <div class="carousel-item active">
            <img class="d-block w-100" src="imagens/flutter2.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h4 class="text-dark">Desenvolvimento Mobile com Flutter</h4>
              <p class="text-dark">Flutter Framework</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/nodejs2.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h4 class="text-dark">NodeJs</h4>
              <p class="text-dark">Node.js é um interpretador de JavaScript assíncrono com código aberto orientado a eventos, criado por Ryan Dahl em 2009</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="imagens/php2.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h4 class="text-dark">PHP</h4>
              <p class="text-dark">PHP é uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplicações presentes e atuantes no lado do servidor.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>


  <?php
  include('../gabarito/template/footer.php')
  ?>