<head>
  <?php
  include('../gabarito/template/head.php');
  ?>
</head>

<body>
  <?php
  include('../gabarito/template/nav.php')
  ?>

<div class="container-fluid colorbody">
    <div id="sejaAluno" class="container">
        <div class="row">
            <div class="col-sm pt-5">
                <h3 class="text-center pb-5">Já tem cadastro? Faça o Login</h3>
                <form class="pt-5">
                  <div class="form-group w-75 ml-5">
                    <label for="exampleInputEmail1">Endereço de Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group w-75 ml-5">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>

                  <button type="submit" class="btn btn-primary w-75 ml-5">Entrar</button>
              </form>
                
            </div>
            <div id="borderSejaAluno" class="m-5"></div>
            <div class="col-sm">
                <h3 class="text-center pt-5">
                  Cadastre-se
                </h3>
                </div>
        </div>
    </div>
</div>

</body>


<?php
  include('../gabarito/template/footer.php')
  ?>

