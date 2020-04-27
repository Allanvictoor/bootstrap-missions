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