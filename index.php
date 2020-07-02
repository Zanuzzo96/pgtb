<?php

  require_once('./assets/php/conexao.php');

  if(isset($_POST['submit'])){
    $validacao = $conn->query('SELECT email,password FROM login')->count();
    echo $validacao;
  }

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Gerenciamento de clientes Túlya Berkelly</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./index.css">
</head>

<body>
    <div class="container-fluid">
      <div class="row d-flex justify-content-end">
        <div class="col-md-6 d-flex align-items-center flex-column justify-content-center col-sm-8 col-lg-6 col-12">
          <img class="img-fluid d-block w-50 mt-4 mb-3 img-logo" src="assets/img/estudio-tulya-berkelly-min.png">
          <div class="card w-75 mb-5">
            <div class="card-header text-center w-100 text-uppercase">Acesse o painel de gerenciamento de clientes&nbsp;</div>
            <div class="card-body w-100">

              <?php if($error) { ?>
                <div class="erro">
                  <h5>Erro: Não encontramos sua conta</h5>
                </div>
              <?php } ?>
              <form class="" method="POST">
                <div class="form-group"> 
                  <label>Email</label> 
                  <input type="email" name="email" class="form-control"> 
                </div>
                <div class="form-group"> 
                  <label>Senha</label> 
                  <input type="password" name="password" class="form-control"> 
                </div> 
                <button type="submit" class="btn btn-submit btn-block btn-lg">Acessar painel</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>