<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
      <body>
        <nav>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cadastro.php">Cadastro</a>
        </li>
    </ul>
    </nav>
          <div class="d-flex justify-content-center"><h1>Cadastro</h1></div>

          <h2>Dados do carro</h2>

            <form action="controller.php" method="POST">

              <div class="form-group">
                <label for="formGroupExampleInput2">Modelo</label>
                <input type="text" class="form-control" name="modelo" id="formGroupExampleInput2" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Cor</label>
                <input type="text" class="form-control" name="cor" id="formGroupExampleInput3" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Marca</label>
                <input type="text" class="form-control" name="marca" id="formGroupExampleInput4" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Ano</label>
                <input type="text" class="form-control" name="ano" id="formGroupExampleInput5" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Cambio</label>
                <input type="text" class="form-control" name="cambio" id="formGroupExampleInput6" placeholder="Digite aqui">
              </div>

            <h2>Motor</h2>
       
              <div class="form-group">
                <label for="formGroupExampleInput">Cilindro</label>
                <input type="text" class="form-control" name="cilindro" id="formGroupExampleInput7" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Potência</label>
                <input type="text" class="form-control" name="potencia" id="formGroupExampleInput8" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Giro Atual</label>
                <input type="text" class="form-control" name="giroAtual" id="formGroupExampleInput9" placeholder="Digite aqui">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Combustivel</label>
                <input type="text" class="form-control" name="combustivel" id="formGroupExampleInput10" placeholder="Digite aqui">
              </div>
            
            <input type="submit" value="Cadastrar">

            </form>
      </body>            
  <?php
        // put your code here
  ?>
    
</html>
