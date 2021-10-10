<?php

//http://localhost/Como-recuperar-clave-de-usuario-usando-PHP-y-MYSQL/nuevaClave.php?tokenUser=fdsfsdfFfDF&id=12
if($_REQUEST['tokenUser'] !="" && $_REQUEST['id'] !=""){ ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Nueva clave</title>
    <style type="text/css">
    body{
      background-color: #f9f9f9;
    }
    .div_contenedor{
      background-color: #fefefe;
      width: 100%;
      height: 100vh;
    }
    .div_centrado{
        background: yellow;
        width: 50%;       
        height: 200px;
        position: absolute;
        top:40%;
        left: 50%;           
        margin-top: -150px;
        margin-left: -350px;
    }
    .well{
      display: block;
      margin: 0 auto;
      width: 100%;
      width: 150px;
    }

    </style>
  </head>
  <body>


    <div class="container div_contenedor">

      <div class="row text-center mb-5">
        <div class="col-md-12 mt-5">
          <img src="assets/images/leonardo-dicaprio-muy-bien.gif" alt="bien" class="img-fluid well">
        </div>
      </div>

      <div class="row text-center div_centrado mt-2">
        <div class="col-md-12 p-md-4" style="background-color: #f9f9f9;">
          <p>Hola Bienvenido, escribe tu nueva clave aquí</p>
          <hr>
          <form action="updateClave.php" action="POST">
            <input type="text" name="id" value="<?php echo $_REQUEST['id']; ?>" hidden="true">
            <input type="text" name="tokenUser" value="<?php echo $_REQUEST['tokenUser']; ?>" hidden="true">

            <div class="form-group mb-3">
                <label for="password" style="float: left; font-weight:bold;">Nueva Clave</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary  btn-block">Recuperar Ahora</button>
            
          </form>
        </div>
      </div>

    </div>

  </body>
</html>

<?php 
}else{ ?>
    <meta http-equiv="refresh" content="0;url=index.php"/>
<?php } ?>
