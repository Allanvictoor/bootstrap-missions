<head>
    <?php
    include('../gabarito/template/head.php');
    ?>
</head>
<body>
    <?php
    include('../gabarito/template/nav.php')
    ?>



<table class="table table-striped col-sm">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col">Curso</th>
      <th class="text-center" scope="col">Situação</th>   
      <th class="text-center" scope="col">Certificado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row"><img class="img-fluid mx-2 mx-auto d-block" style="width: 3rem;" src="imagens/html.png" alt=""><p class="text-center">HTML5</p></th>
        <td class="text-center">Cursando</td>
        <td class="text-center"><button type="button" class="btn btn-primary mx-1"><i class="fas fa-download mx-1"></i>Download</button></td> 
    </tr>
    <tr>
    <th scope="row"><img class="img-fluid mx-2 mx-auto d-block" style="width: 3rem;" src="imagens/css3.png" alt=""><p class="text-center">CSS3</p></th>
        <td class="text-center">Cursando</td>
        <td class="text-center"><button type="button" class="btn btn-primary mx-1"><i class="fas fa-download mx-1"></i>Download</button></td>
    </tr>
    <tr>
    <th scope="row"><img class="img-fluid mx-2 mx-auto d-block" style="width: 3rem;" src="imagens/bootstrap.png" alt=""><p class="text-center">Bootstrap 4</p></th>
        <td class="text-center">Cursando</td>  
        <td class="text-center"><button type="button" class="btn btn-primary mx-1"><i class="fas fa-download mx-1"></i>Download</button></td>
    </tr>
    <tr>
    <th scope="row"><img class="img-fluid mx-2 mx-auto d-block" style="width: 3rem;" src="imagens/javascript-1.svg" alt=""><p class="text-center">Javascript</p></th>
        <td class="text-center">Cursando</td>
        <td class="text-center"><button type="button" class="btn btn-primary mx-1"><i class="fas fa-download mx-1"></i>Download</button></td>
    </tr>
  </tbody>
</table>





<?php
    include('../gabarito/template/footer.php')
?>
</body>