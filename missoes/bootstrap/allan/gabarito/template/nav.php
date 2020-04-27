 <!--Navbar-->
 <nav id="navBar" class="navbar navbar-expand-lg navbar-light bg" style="background-color: #011b47">
    <a class="navbar-brand" href="index.php"><img class="img-fluid" style="width: 10rem;"
        src="https://d1g1z9wxad75uh.cloudfront.net/public/uploads/vivaweb/logo/phpMhQYku_5e131abb4c9d5.png"
        alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars" style="color: white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav text-center" style="font-weight: 800">
        <a class="nav-item nav-link active text-white mx-3" href="index.php">Home <span
            class="sr-only">(current)</span></a>
        <a class="nav-item nav-link text-white mx-3" href="cursos.php">Cursos</a>
        <a class="nav-item nav-link text-white mx-3" href="modulos.php">Módulos</a>
        <a class="nav-item nav-link text-white mx-3" href="certificados.php">Certificados</a>
      </div>
      <hr id="hrMenu">
      <div class="dropdown col-sm-3 ">
        <div id="avatar" class="row"><img class="rounded-circle" style="width: 3rem" src="imagens/avataravatar.png"
            alt="">
          <p class="text-white p-1 my-auto">Allan</p>
        </div>
        <div class="row">

          <button id="btnLogin" class="btn btn-secondary dropdown-toggle float-right mx-1" type="button"
            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Login
          </button>
          <button id="btnCadastro" class="btn btn-primary float-right" type="button" id="dropdownMenuButton"
            data-toggle="modal" data-target="#staticBackdrop" aria-haspopup="true" aria-expanded="false">
            Cadastre-se
          </button>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <div id="imgLogin">
              <img src="https://gatesbbq.com/wp-content/uploads/2017/04/checkmarksuccess.gif" alt="" style="width: 100%"
                class="mx-auto d-block">
            </div>

            <form class="menuitem" id="formLogin">

              <div class="form-group p-2">

                <label for="exampleInputEmail1">Email</label>
                <input id="formEmail" type="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp" placeholder="email@email.com">

              </div>
              <div class="form-group p-2">
                <label for="exampleInputPassword1">Senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="********">
              </div>

              <button id="btnLogar" type="button" class="btn btn-primary mx-auto d-block">Logar</button>
            </form>
          </div>
        </div>

      </div>
    </div>
  </nav>
  <!--Fim Navbar-->

   <!-- Modal -->
   <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalTextoUm">Faça seu cadastro</h5>
              <h5 class="modal-title" id="modalTextoDois">Confirme seu cadastro no email enviado para sua conta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <img id="imgEmailModal" style="width: 100%"
                src="https://web4franquia.com/wp-content/uploads/2019/02/mail-icon-mail-icon.gif" alt="">
              <form id="formModal">
                <div class="form">
                  <div class="form-group col-md-12">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Senha</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Confirmar Senha</label>
                      <input type="password" class="form-control" id="inputPassword4">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">Endereço</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="">
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">Cidade</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState">Estado</label>
                    <select id="inputState" class="form-control">
                      <option selected>Estado...</option>
                      <option>Acre</option>
                      <option>Alagoas </option>
                      <option>Amapá</option>
                      <option>Amazonas </option>
                      <option>Bahia </option>
                      <option>Ceará </option>
                      <option>Distrito Federal</option>
                      <option>Espírito Santo</option>
                      <option>Goiás</option>
                      <option>Maranhão</option>
                      <option>Mato Grosso</option>
                      <option>Mato Grosso do Sul</option>
                      <option>Minas Gerais</option>
                      <option>Pará</option>
                      <option>Paraíba</option>
                      <option>Paraná</option>
                      <option>Pernambuco</option>
                      <option>Piauí</option>
                      <option>Rio de Janeiro</option>
                      <option>Rio Grande do Norte</option>
                      <option>Rio Grande do Sul</option>
                      <option>Rondônia</option>
                      <option>Roraima</option>
                      <option>Santa Catarina</option>
                      <option>São Paulo</option>
                      <option>Sergipe</option>
                      <option>Tocantins</option>
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
                      Eu aceito os termos.
                    </label>
                  </div>
                </div>

              </form>
            </div>
            <div id="btnbtnmodal" class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button id="btnModal" type="button" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </div>
      </div>