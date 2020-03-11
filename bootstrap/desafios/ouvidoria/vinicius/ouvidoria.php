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
<div class="container border my-3">
    <form action="../vinicius/banco.php">
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
                            <label>Nome Completo *</label>
                            <input class="w-100 form-control" type="text" required/>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="formPrincipal:dtNascimento_Input">Data de nascimento</label>
                                <div class="input-group date" id="formPrincipal:dtNascimento">
                                    <input type="text" id="nascimento" name="formPrincipal:dtNascimento"
                                           class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label>E-mail</label>
                            <input id="email" class="w-100 form-control" type="email" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label>CPF/CNPJ</label>
                            <input id="cpf" class="w-100 form-control" type="text" required/>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label>RG</label>
                            <input id="rg" class="w-100 form-control" type="text" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12 my-3">
                            <div class="form-group">
                                <fieldset>
                                    <legend>Informe o sexo</legend>
                                    <table id="formPrincipal:sexo">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <input type="radio" name="formPrincipal:sexo" id="formPrincipal:sexo:0"
                                                       value="M"><label for="formPrincipal:sexo:0"> Masculino</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="radio" name="formPrincipal:sexo" id="formPrincipal:sexo:1"
                                                       value="F"><label for="formPrincipal:sexo:1"> Feminino</label>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="border-bottom border-top d-flex justify-content-center">
                        <h3 class="my-2">Dados Residenciais</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label>CEP</label>
                            <input id="cep" class="w-100 form-control" type="text" required/>
                        </div>
                        <div class="col-md-4">
                            <label>Logradouro</label>
                            <input class="w-100 form-control form-control" type="text" required/>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label>Número</label>
                            <input class="w-100 form-control" type="text" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label>Complemento</label>
                            <input class="w-100 form-control" type="text" required/>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label>Bairro</label>
                            <input class="w-100 form-control" type="text" required/>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <label>Cidade</label>
                            <input class="w-100 form-control" type="text" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <label>UF</label>
                            <div class="form-group " id="formPrincipal:uf">
                                <select id="formPrincipal:ufInner" name="formPrincipal:ufInner"
                                        class="form-control  bf-required"
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
                            <input class="w-100 form-control" type="text" required/>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="form-group">
                                <label for="">Celular</label>
                                <input id="celular" name="formPrincipal:celular" type="text"
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
                                            name="formPrincipal:tipoManifestacaoInner"
                                            class="form-control  bf-required" required>
                                        <option data-label="Selecione" value="">Selecione</option>
                                        <option data-label="Denúncia" value="1">Denúncia</option>
                                        <option data-label="Elogio" value="2">Elogio</option>
                                        <option data-label="Reclamação" value="4">Reclamação</option>
                                        <option data-label="Solicitação" value="5">Solicitação</option>
                                        <option data-label="Sugestão" value="6">Sugestão</option>
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
                                            name="formPrincipal:relacionamentoInner"
                                            class="form-control" required>
                                        <option data-label="Selecione" value="">Selecione</option>
                                        <option data-label="Juiz do Trabalho" value="3">Aluno</option>
                                        <option data-label="Estagiário" value="2">Funcionário</option>
                                        <option data-label="Advogado" value="1">Professor</option>
                                        <option data-label="Outros" value="4">Outros</option>
                                    </select></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group mb-3">
                            <div class="col-md-6 col-sm-12">
                                <label for="formPrincipal:fileUploader">Anexar arquivo</label>
                                <input id="formPrincipal:fileUploader" type="file" name="formPrincipal:fileUploader">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 my-3">
                            <div class="form-group">
                                <label for="">Texto
                                    Manifestação *</label>
                                <textarea id="" name="Manifestacao" class="form-control" maxlength="255">
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