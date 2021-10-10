
 <?php
if(isset($_REQUEST['errorEmail'])){ ?>
         <div class="alert show showAlert" style="color:#f44336;">
               <strong> Ops.! </strong>
               El Correo no Existe, por favor Verifique.
        </div>
<?php }

if(isset($_REQUEST['emaiIncorrecto'])){ ?>
    <div class="alert show showAlert" style="color:#fff;">
          <strong> Ops...! </strong>
          Credenciales Incorrectas, por favor verifique.
   </div>
<?php } 

if(isset($_REQUEST['email'])){ ?>
    <div class="alert show showAlert" style="color:#fff;">
          <strong> Felicitaciones! </strong>
          Su clave fue cambiada, revise su correo.
   </div>
<?php } ?>