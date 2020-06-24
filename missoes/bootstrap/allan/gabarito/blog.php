<head>
  <?php
  include('../gabarito/template/head.php');
  ?>
</head>

<body class="colorbody">
  <?php
  include('../gabarito/template/nav.php')
  ?>


<div class="container-fluid " id="blogcontainer" >
<img class="img-fluid w-100 " src="imagens/banner1.png" alt="">
    <div class="container" id="blog">
        <p class="col-sm pt-5 pb-3 text-center">Confira dicas da semana</p>
         <div class="row">
            <div class="col-sm">
              <h5 class="pt-4">GIT</h5>
            <iframe width="320" height="250" src="https://www.youtube.com/embed/6Czd1Yetaac" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm">
            <h5 class="pt-4">FLUTTER</h5>
            <iframe width="320" height="250" src="https://www.youtube.com/embed/gMIv5WCiU5Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm">
            <h5 class="pt-4">REACT-NATIVE</h5>
            <iframe width="320" height="250" src="https://www.youtube.com/embed/DDm0M_rZLJo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
         <div class="row pt-3 mb-5">
            <div class="col-sm">
            <h5 class="pt-4">DENO</h5>
            <iframe width="320" height="250" src="https://www.youtube.com/embed/Vw9BG9fauIE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm">
            <h5 class="pt-4">MULTIBOT</h5>
            <iframe width="320" height="250" src="https://www.youtube.com/embed/iPuFjBo9s5A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm">
            <h5 class="pt-4">SASS</h5>
            <iframe width="320" height="250" src="https://www.youtube.com/embed/rRGWiztH4bY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
         </div>
              
              <h3 class="text-center pt-5 pb-2" id="blog">Depoimentos sobre os cursos</h3>


         <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="row">
            <div class="col-sm">
            <img src="imagens/depoimento.png" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="col-sm"><img src="imagens/depoimento.png" class="d-block w-100 img-fluid" alt="..."></div>
            <div class="col-sm"><img src="imagens/depoimento.png" class="d-block w-100 img-fluid" alt="..."></div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="row">
            <div class="col-sm">
            <img src="imagens/depoimento1.png" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="col-sm"><img src="imagens/depoimento1.png" class="d-block w-100 img-fluid" alt="..."></div>
            <div class="col-sm"><img src="imagens/depoimento1.png" class="d-block w-100 img-fluid" alt="..."></div>
        </div>
    </div>
    <div class="carousel-item">
    <div class="row">
            <div class="col-sm">
            <img src="imagens/depoimento2.png" class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="col-sm"><img src="imagens/depoimento2.png" class="d-block w-100 img-fluid" alt="..."></div>
            <div class="col-sm"><img src="imagens/depoimento2.png" class="d-block w-100 img-fluid" alt="..."></div>
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


</body>


<?php
  include('../gabarito/template/footer.php')
  ?>

