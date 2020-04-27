<head>
    <?php
    include('../gabarito/template/head.php');
    ?>
</head>
<body>
    <?php
    include('../gabarito/template/nav.php')
    ?>


<div class="col-sm  bodyMaior">
  <table class="table table-striped" >
    <thead class="col-sm">
      <tr>
        <th  scope="col">Curso</th>
        <th scope="col" class="text-center">Situação</th>
        <th scope="col" class="text-center">Data de conclusão</th>
        <th scope="col" class="text-center">Certificado</th>
        <th scope="col" class="text-center">Ementa</th>
      </tr>
    </thead>
    <tbody class="col-sm">
      <tr>
        <th scope="row"><img class="img-fluid mx-2" style="width: 3rem;" src="imagens/html.png" alt="">HTML5</th>
        <td class="text-center">Cursando</td>
        <td class="text-center">24/04/2020</td>
        <td class="text-center"><button type="button" class="btn btn-primary mx-1"><i class="fas fa-download mx-1"></i>Download</button></td>
        <td class="text-center">
            <div class="rown text-center">
                <button type="button" class="btn btn-info"> <i class="fas fa-eye mx-1"></i>Visualizar</button></div>
        </td>
      </tr>
      <tr>
        <th scope="row"><img class="img-fluid mx-2" style="width: 3rem;" src="imagens/css3.png" alt="">CSS3</th>
        <td class="text-center">Não iniciado</td>
        <td class="text-center">24/04/2020</td>
        <td class="text-center"><button type="button" class="btn btn-primary mx-1"><i class="fas fa-download mx-1"></i>Download</button></td>
        <td class="text-center">
            <div class="rown text-center col-sm"><button type="button" class="btn btn-info"> <i class="fas fa-eye mx-1"></i>Visualizar</button></div>
        </td>
      </tr>
      <tr>
        <th scope="row"><img class="img-fluid mx-2" style="width: 3rem;" src="imagens/bootstrap.png" alt="">BOOTSTRAP</th>
        <td class="text-center">Não iniciado</td>
        <td class="text-center">24/04/2020</td>
        <td class="text-center"><button type="button" class="btn btn-primary mx-1"><i class="fas fa-download mx-1"></i>Download</button></td>
        <td class="text-center"><div class="rown text-center col-sm"><button type="button" class="btn btn-info"> <i class="fas fa-eye mx-1"></i>Visualizar</button></div></td>
      </tr>
      <tr>
        <th scope="row"><img class="img-fluid mx-2" style="width: 3rem;" src="imagens/javascript-1.svg" alt="">JAVASCRIPT</th>
        <td class="text-center">Não iniciado</td>
        <td class="text-center">24/04/2020</td>
        <td class="text-center"><button type="button" class="btn btn-primary mx-1"><i class="fas fa-download mx-1"></i>Download</button></td>
        <td class="text-center"><div class="rown text-center col-sm"><button type="button" class="btn btn-info"> <i class="fas fa-eye mx-1"></i>Visualizar</button></div></td>

      </tr>
    </tbody>
  </table>
</div>


<?php
    include('../gabarito/template/footer.php')
?>
</body>