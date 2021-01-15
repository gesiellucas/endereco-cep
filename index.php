<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Gesiel Lucas Ferreira">
  <meta name="description" content="Teste de conhecimentos para processo seletivo - 2021">
  <title>Consulta CEP - 2021</title>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
</head>



<body class="bg-light">
  <section id="consultar_cep" class="container-fluid">

    <div class="row" id="alerta-erros">
      <div class="col-md-12 justify-center">
        <div id="demo"></div>
      </div>
    </div>


    <div class="row">
      <div class="col-md-5 mt-5 justify-center">
        <h1>Pesquisar por CEP</h1>
        <form method="post" action="gravar_banco.php">
          <div class="input-group mb-3" id="cep-border">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">CEP:</span>
            </div>
            <input type="text" class="form-control" value="" name="cep" id="cep" placeholder="CEP..." aria-label="cep" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Rua:</span>
            </div>
            <input type="text" class="form-control" value="" name="rua" id="rua" placeholder="Rua..." aria-label="rua" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Bairro:</span>
            </div>
            <input type="text" class="form-control" value="" name="bairro" id="bairro" placeholder="Bairro..." aria-label="bairro" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Cidade:</span>
            </div>
            <input type="text" class="form-control" value="" name="cidade" id="cidade" placeholder="Cidade..." aria-label="cidade" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Estado:</span>
            </div>
            <input type="text" class="form-control" value="" name="uf" id="uf" placeholder="Estado..." aria-label="estado" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">IGBE:</span>
            </div>
            <input type="text" class="form-control" value="" name="ibge" id="ibge" placeholder="IBGE..." aria-label="ibge" aria-describedby="basic-addon1">
          </div>



          <button class="btn btn-danger btn-block mt-3" id="gravar">Gravar no banco de dados</button>
        </form>

        <button class="btn btn-info btn-block mt-3" id="alerta">Consultar</button>
      </div>
    </div>
  </section>

  <section id="exibir_cep" class="container-fluid mt-5">
    <h2>Exibir endereços</h2>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">CEP</th>
          <th scope="col">Rua</th>
          <th scope="col">Bairro</th>
          <th scope="col">Cidade</th>
          <th scope="col">Estado</th>
          <th scope="col">IBGE</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include "exibir_dados.php"
        ?>

      </tbody>
    </table>

  </section>

</body>

</html>