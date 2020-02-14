<?php
    include 'calculaconsumoForm.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Calcula consumo</title>
    <meta charset="utf-8" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="calculaconsumo.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="jumbotron">
        <h4>Álcool ou gasolina?</h4>
        <p class="lead">Reponda o formulário e descubra.</p>
      </div>

      <form method="post">
        <div class="form-row">
          <div class="form-group col-sm-6">
            <label>Qual a capacidades do tanque?</label>
            <input type="text" name="tanque" id="tanque" class="form-control" value="<?php echo $tanque ?>" />
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-sm-6">
            <label>Qual o valor da Gasolina?</label>
            <input type="text" name="valorGasolina" id="valorGasolina" class="form-control" value="<?php echo $valorGasolina ?>" />
          </div>

          <div class="form-group col-sm-6">
            <label>Qual a caminho percorrido com Gasolina?</label>
            <input type="text" name="caminhoComGasolina" id="caminhoComGasolina" class="form-control" value="<?php echo $caminhoComGasolina ?>" />
          </div>

          <div class="form-group col-sm-6">
            <label>Qual o valor do Alcool?</label>
            <input type="text" name="valorAlcool" id="valorAlcool" class="form-control" value="<?php echo $valorAlcool ?>" />
          </div>

          <div class="form-group col-sm-6">
            <label>Qual o caminho percorrido com Alcool?</label>
            <input type="text" name="caminhoComAlcool" id="caminhoComAlcool" class="form-control" value="<?php echo $caminhoComAlcool ?>" />
          </div>

        </div>

        <input id="calcular" type="submit" value="Calcular" class="btn btn-primary" />
      </form>

      <br /><br />

      <div id="resultado">
<?php if (! $formSubmetido) { ?>
        <div class="alert alert-warning" role="alert">
          Preencha os dados e clique em Calcular para realizar a operação.
        </div>
<?php } ?>

        <div>
<?php if ($formSubmetido) { ?>
          <div class="alert alert-success" role="alert">
            Vale a pena <strong><?php echo $compensa ?></strong>
          </div>
<?php } ?>

          <table class="table">
            <thead>
              <tr>
                <th>Tipo</th>
                <th>Consumo por Km</th>
                <th>Índice</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Gasolina</td>
                <td><?php echo $consumoDeGasolina ?? '-' ?></td>
                <td><?php echo $indiceGasolina ?? '-' ?></td>
              </tr>
              <tr>
                <td>Álcool</td>
                <td><?php echo $consumoDeAlcool ?? '-' ?></td>
                <td><?php echo $indiceAlcool ?? '-' ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
