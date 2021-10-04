<!DOCTYPE html>
<html lang="es">
  <head>
  <title>Login con PHP y MYSQL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/login_regist.css">

    <style type="text/css">
    .backgroundFondo{
    background: url('assets/images/fondo.jpg') no-repeat center top;
    background-size: cover;
    height: 100vh;

    display: flex;
    justify-content: center;
    align-items: center;
    }
    </style>
  </head>
  <body class="backgroundFondo">

  <?php
if(isset($_REQUEST['errorEmail'])){ ?>
         <div class="alert show showAlert" style="color:#f44336;">
               <strong> Ops.! </strong>
               El Correo no Existe, por favor Verifique.
        </div>
<?php }

if(isset($_REQUEST['emaiIncorrecto'])){ ?>
    <div class="alert show showAlert" style="color:#f44336;">
          <strong> Ops...! </strong>
          Credenciales Incorrectas, por favor verifique.
   </div>
<?php } 

if(isset($_REQUEST['email'])){ ?>
    <div class="alert show showAlert" style="color:#f44336;">
          <strong> Felicitaciones! </strong>
          Su clave fue cambiada, revise su correo.
   </div>
<?php } ?>

<div class="container"> 
<div class="world-latest-articles">
    <div class="row">
      <div class="col-12 col-lg-12">

    <div class="form">
        <div id="signup">
            <h1 class="text-center" style="color: #333; font-weight: bold;">Iniciar Sesión</h1>
            <form action="verificarDatos/verificar_sesion.php" method="post">
                <div class="field-wrap">
                    <label>Correo</label>
                    <input type="email" name="email" required autocomplete="off"/>
                </div>
                <div class="field-wrap">
                    <label>Contraseña</label>
                    <input type="password" name="password" required autocomplete="off"/>
                </div>

                <input type="submit" class="button button-block mb-3 mt-5 miBtn mt-3" value="ENTRAR"/>

                <a href="#" id="nuevaCuenta" title="Volver">Crear Cuenta..!</a>

                <a href="#" id="olvidar" title="Recuperar Clave">Recuperar Clave</a>
                <br><br>    
                  
            </form>
        </div>


        <div id="recuperarclave">
            <h1 class="text-center mb-5 recuperarPass">
                Recuperar tu Clave
            </h1>
            <form action="recuperarClave.php" method="post">
                <div class="field-wrap">
                    <label>Correo</label>
                    <input type="email" name="email" required autocomplete="off"/>
                </div>
            
                <input type="submit" class="button button-block miBtn mt-5" value="RECUPERAR CLAVE"/>

                <a href="#" id="volver" class="mt-3 mb-4" title="Volver">Volver</a>
                <br><br>
            </form>
        </div>

    </div>
</div>
</div>
</div>   
</div>




<script src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
 $('#recuperarclave').hide(); 

$('#olvidar').on('click', function() {
    $('#signup').hide(); //para ocultar
    $("#recuperarclave").fadeIn("slow"); //mostrar
});

$('#volver').on('click', function() {
    $('#recuperarclave').hide(); //para ocultar
    $("#signup").fadeIn("slow"); //mostrar
});
</script>

    
  </body>
</html>