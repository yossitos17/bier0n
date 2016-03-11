<?php

// Paso de los roles a valor numérico para facilitar
// las funciones de seguridad.

define("Administrador", "Administrador");
define("Registrado", "Registrado");


// Función que muestra los errores.
function muestraError(){
    if(isset($_GET['error'])){
        echo "<div id='error'>Error: $_GET[error]</div>";
    }
}

function cabecera(){
    echo "<div id='frase'> </div>";
}


// Comprueba el rol del usuario para que no entre donde no debe.
function seguridad($rol){
  session_start();
  if(isset($_SESSION['autenticado'])){
    if(!($_SESSION['rol'] == $rol || $_SESSION['rol'] == "Administrador")){
      header("Location: index.php?error=No tienes permiso");
      exit();
    }
   
    
  }else{
      
      session_destroy();
      header("Location: index.php?error=No estás autenticado.");
      exit();
  }
}

function piePagina(){
    echo "Bier0n es software libre para que te hartes con él.
            En caso de duda puedes acudir a yoss_ff8@hotmail.com";
    
}
?>