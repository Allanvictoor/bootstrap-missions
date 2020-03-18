<!Doctype html>
<html lang="en">
<head>
    <?php
    include("../vinicius/head.php");
    ?>
</head>
<body>
<?php
include("../vinicius/nav.php")
?>
<div class="container my-3">
    <form method="post" action="../vinicius/banco.php">
        <div class="form-group">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="border-bottom d-flex justify-content-center my-3">
                        <h3>Dados Pessoais</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 my-3">
                            <label>Nome *</label>
                            <input class="w-100 form-control" type="text" placeholder="Digite seu nome completo" name="nome" required/>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="formPrincipal:dtNascimento_Input">Data de nascimento</label>
                                <div class="input-group date" id="formPrincipal:dtNascimento">
                                    <input type="text" id="nascimento" name="nascimento"
                                           class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label>E-mail</label>
                            <input id="email" class="w-100 form-control" type="email" name="email" placeholder="Digite seu Email" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label>CPF</label>
                            <input id="cpf" class="w-100 form-control" type="text" placeholder="Digite seu CPF" name="cpf" required/>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label>RG</label>
                            <input id="rg" class="w-100 form-control" type="text" placeholder="Digite seu RG" name="rg" required/>
                        </div>
                    </div>
                    <div class="border-bottom border-top d-flex justify-content-center">
                        <h3 class="my-2">Dados Residenciais</h3>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 col-sm-12">
                            <label>CEP</label>
                            <input id="cep" class="w-100 form-control" type="text" placeholder="Digite o CEP" name="cep" required/>
                        </div>
                        <div class="col-md-4">
                            <label>Logradouro</label>
                            <input class="w-100 form-control form-control" type="text" name="logradouro" placeholder="Digite o logradouro" required/>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label>Número</label>
                            <input class="w-100 form-control" type="text" placeholder="Número" name="numero" required/>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 col-sm-12">
                            <label>Complemento</label>
                            <input class="w-100 form-control" type="text" placeholder="Complemento" name="complemento" required/>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label>Bairro</label>
                            <input class="w-100 form-control" type="text" name="bairro" placeholder="Bairro" required/>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label>Cidade</label>
                            <input class="w-100 form-control" type="text" name="cidade" placeholder="Cidade" required/>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4 col-sm-12">
                            <label>UF</label>
                            <div class="form-group " id="formPrincipal:uf">
                                <select id="formPrincipal:ufInner" name="estados"
                                        class="form-control"
                                        required>
                                    <option data-label="Selecione" value="">Selecione</option>
                                    <option data-label="Acre" value="AC">Acre</option>
                                    <option data-label="Alagoas" value="AL">Alagoas</option>
                                    <option data-label="Amapá" value="AP">Amapá</option>
                                    <option data-label="Amazonas" value="AM">Amazonas</option>
                                    <option data-label="Bahia" value="BA">Bahia</option>
                                    <option data-label="Ceará" value="CE">Ceará</option>
                                    <option data-label="Distrito Federal" value="DF">Distrito Federal</option>
                                    <option data-label="Espírito Santo" value="ES">Espírito Santo</option>
                                    <option data-label="Goiás" value="GO">Goiás</option>
                                    <option data-label="Maranhão" value="MA">Maranhão</option>
                                    <option data-label="Mato Grosso" value="MT">Mato Grosso</option>
                                    <option data-label="Mato Grosso do Sul" value="MS">Mato Grosso do Sul</option>
                                    <option data-label="Minas Gerais" value="MG">Minas Gerais</option>
                                    <option data-label="Pará" value="PA">Pará</option>
                                    <option data-label="Paraíba" value="PB">Paraíba</option>
                                    <option data-label="Paraná" value="PR">Paraná</option>
                                    <option data-label="Pernambuco" value="PE">Pernambuco</option>
                                    <option data-label="Piauí" value="PI">Piauí</option>
                                    <option data-label="Rio de Janeiro" value="RJ">Rio de Janeiro</option>
                                    <option data-label="Rio Grande do Norte" value="RN">Rio Grande do Norte</option>
                                    <option data-label="Rio Grande do Sul" value="RS">Rio Grande do Sul</option>
                                    <option data-label="Rondônia" value="RO">Rondônia</option>
                                    <option data-label="Roraima" value="RR">Roraima</option>
                                    <option data-label="Santa Catarina" value="SC">Santa Catarina</option>
                                    <option data-label="São Paulo" value="SP">São Paulo</option>
                                    <option data-label="Sergipe" value="SE">Sergipe</option>
                                    <option data-label="Tocantins" value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label>País</label>
                            <input class="w-100 form-control" type="text" placeholder="País" name="país" required/>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="">Celular</label>
                                <input id="celular" name="celular" placeholder="(99) 9 9999-9999 " type="text"
                                       maxlength="15" class="form-control"
                                       role="textbox" aria-disabled="false" aria-readonly="false" required>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-top d-flex justify-content-center">
                        <h3 class="my-2">Dados da Manifestação </h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 my-3">
                            <div class="form-group">
                                <label for="formPrincipal:tipoManifestacaoInner">Tipo
                                    de manifestação *</label>
                                <div class="form-group " id="formPrincipal:tipoManifestacao">
                                    <select id="formPrincipal:tipoManifestacaoInner"
                                            name="tipomanifestacao"
                                            class="form-control  bf-required" required>
                                        <option data-label="Selecione" value="">Selecione</option>
                                        <option data-label="Denúncia" value="Denúncia">Denúncia</option>
                                        <option data-label="Elogio" value="Elogio">Elogio</option>
                                        <option data-label="Reclamação" value="Reclamação">Reclamação</option>
                                        <option data-label="Solicitação" value="Solicitação">Solicitação</option>
                                        <option data-label="Sugestão" value="Sugestão">Sugestão</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 my-3">
                            <div class="form-group">
                                <label for="formPrincipal:relacionamentoInner">Seu
                                    relacionamento conosco</label>
                                <div class="form-group " id="formPrincipal:relacionamento">
                                    <select id="formPrincipal:relacionamentoInner"
                                            name="relacionamento"
                                            class="form-control" required>
                                        <option data-label="Selecione" value="">Selecione</option>
                                        <option data-label="Juiz do Trabalho" value="Aluno">Aluno</option>
                                        <option data-label="Estagiário" value="Funcionário">Funcionário</option>
                                        <option data-label="Advogado" value="Professor">Professor</option>
                                        <option data-label="Outros" value="Outros">Outros</option>
                                    </select></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-3">
                            <div class="col-md-6 col-sm-12">
                                <label for="formPrincipal:fileUploader">Anexar arquivo</label>
                                <input id="formPrincipal:fileUploader" type="file" name="imagem">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 my-3">
                            <div class="form-group">
                                <label for="">Texto
                                    Manifestação *</label>
                                <textarea id="" name="manifestacao" class="form-control" maxlength="255">
                            </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="d-flex justify-content-center">
                    <input id="click-botao" class="btn btn-danger" type="submit" value="Enviar">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
include("../vinicius/rodape.php");
?>
</body>
</html>
<script>
    $(document).ready(function () {
        $('#nascimento').mask('00/00/0000', {placeholder: "__/__/____"});
        $('#cpf').mask('000.000.000-00', {reverse: true});
        $('#rg').mask('00.000.000.0', {reverse: true});
        $('#cep').mask('00.000-000', {reverse: true});
        $('#celular').mask('(00) 00000-0000');
    });
</script>