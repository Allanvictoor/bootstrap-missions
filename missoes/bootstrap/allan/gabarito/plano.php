<?php
include('../gabarito/template/head.php')
?>
<?php
include('../gabarito/template/nav.php')
?>



<div class="container-fluid primarycolor">
    <div class="container">
        <div class="row">
            <div class="col-sm p-3">
                <div id="cardPlano" class="card">
                    <div class="card-header">
                        <div class="alert alert-success text-center my-auto" role="alert">
                            Plano anual ativo
                        </div>

                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Com o plano anual você tem acesso a todos os cursos pelo período de 12 meses</h5>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Restam 215 dias</div>

                        </div>
                        <div class="mt-3"><a href="cursos.php" class="btn btn-link">Ir para Cursos</a></div>
                        <hr class="m-5">
                        <div class="text-center">
                            <img id="imagemAvatarPlano" class="img-fluid rounded-circle" src="imagens/4.webp" alt="">
                            <h5 class="pt-2" id="nomeplano">Steve Wozniak</h5>
                            <div class="btn-group-vertical mt-5 w-75" role="group" aria-label="Button group with nested dropdown">
                            <button type="button m-3" class="btn btn-primary">Editar Perfil</button>
                            <button type="button" class="btn btn-secondary mt-2">Notificações</button>
                            <button type="button" class="btn btn-secondary">Clientes API</button>
                            <button type="button" class="btn btn-secondary">Encerrar Conta</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm p-3">
                        <div id="cardPlano" class="card">
                            <div class="card-header">
                                <div class="alert alert-warning my-auto text-center" role="alert">
                                    Mudar meu Plano
                                </div>

                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Mude o plano para o que mais lhe agrade</h5>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Selecione o Plano</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>selecionar</option>
                                            <option>Anual</option>
                                            <option>Semestral</option>
                                            <option>Trimestral</option>
                                            <option>Mensal</option>
                                        </select>
                                    </div>
                                </form>
                                <hr class="m-5">
                                Dados do Cartão de Crédito
                                
                                    <form>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationServer01">Nome igual do cartão</label>
                                                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="First name" value="Maria" required>
                                                <div class="valid-feedback">
                                                    ok!
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationServer05">CVV</label>
                                                <input type="text" class="form-control is-invalid" id="validationServer05" placeholder="Números atrás do cartão" required>
                                                <div class="invalid-feedback">
                                                    Número obrigatório
                                                </div>
                                            </div>


                                            <div class="col-md-6 mb-3">
                                                <label for="validationServer03">Número do Cartão</label>
                                                <input type="num" class="form-control is-invalid" id="validationServer03" placeholder="XXXX-XXXX-XXXX-XXXX" required>
                                                <div class="invalid-feedback">
                                                    Número obrigatório
                                                </div>


                                            </div>
                                            <div class="col-sm-6">
                                                <label for="validationServer03">Validade</label>
                                                <input class="form-control is-invalid col-sm-6 id="  type="month">
                                                <div class="invalid-feedback">
                                                    Data obrigatória
                                                </div>
                                            </div>
                                    </form>
                                <div class="d-none d-md-block">
                                
                                    <div class="row ml-5 pt-3">
                                <div class="col-sm ml-3">
                                    <img class="img-fluid my-auto" style="width: 3rem" src="imagens/visa-logo.png" alt="">
                                </div>
                                <div class="col-sm ml-3">
                                <img class="img-fluid my-auto" style="width: 3rem" src="imagens/mastercard2.png" alt="">
                                </div>
                                <div class="col-sm ml-3">
                                <img class="img-fluid my-auto" style="width: 3rem" src="imagens/hipercard.png" alt="">
                                </div>
                                <div class="col-sm ml-3">
                                <img class="img-fluid my-auto" style="width: 3rem" src="imagens/elo.png" alt="">
                                </div>
                            </div>
                           
                            </div>
                                <div class="w-100 pt-4">
                                    <a href="#" class="btn btn-success w-100 mt-2">Mudar Plano atual</a>
                                </div>
                               
                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>




<?php
include('../gabarito/template/footer.php')
?>