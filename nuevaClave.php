<?php
include('verificarDatos/config.php');
//$id 		      = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];
//$tokenUser 		= isset($_POST['tokenUser']) ? $_POST['tokenUser'] : $_GET['tokenUser'];
if($_REQUEST['tokenUser'] !="" && $_REQUEST['id'] !=""){

}else{ ?>
<meta http-equiv="refresh" content="0;url=index.php"/>
<?php }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Nueva clave</title>
  </head>
  <body>

    <div class="container">
      
      <div class="row text-center">
        <div class="col-md-12 p-md-4" style="background-color: #f9f9f9;">
          <p>Hola ya estoy logueado, soy <strong>hola</strong></p>
          <hr>
          <form action="updateClave.php" action="POST">
            <input type="text" name="id" value="<?php echo $id; ?>" hidden="true">
            <input type="text" name="tokenUser" value="<?php echo $tokenUser; ?>" hidden="true">


            <div class="form-group">
                <label for="exampleInputPassword1">Nueva Clave</label>
                <input type="password" name="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-info btn-sm">Recuperar</button>
          </form>
        </div>
      </div>

    </div>

  </body>
</html>
