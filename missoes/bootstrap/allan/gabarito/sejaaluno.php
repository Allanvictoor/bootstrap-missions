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
                <h3 class="text-center pb-5" id="blog">Já tem cadastro? Faça o Login</h3>
                <form class="pt-5">
                  <div class="form-group w-100">
                    <label for="exampleInputEmail1">Endereço de Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="form-group w-100">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>

                  <button type="submit" class="btn btn-primary w-100 mt-4">Entrar</button>
              </form>
                
            </div>
            <div id="borderSejaAluno" class="m-5"></div>
            <div class="col-sm">
                <h3 class="text-center pt-5 pb-5" id="blog">
                  Cadastre-se
                </h3>
                <form class="pt-5">
                  <div class="form-row">
                    <div class="form-group col-md">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4">
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                      <label for="inputPassword4">Senha</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Repetir Senha</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputCity">Cidade</label>
                      <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Estado</label>
                      <select id="inputState" class="form-control">
                        <option selected>Selecionar</option>
                        <option>...</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputZip">CEP</label>
                      <input type="text" class="form-control" id="inputZip">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        concordo com os termos
                      </label>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                </form>
                </div>
        </div>
    </div>
</div>

</body>


<?php
  include('../gabarito/template/footer.php')
  ?>

