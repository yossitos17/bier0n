<?php

// Paso de los roles a valor numérico para facilitar
// las funciones de seguridad.

define("Administrador", "Administrador");
define("Registrado", "Registrado");

    // Muestra el mensaje de bienvenida si la sesión está iniciada.
    //if(isset($_SESSION['autenticado'])){
        //echo "Bienvenido, $_SESSION[usuario], tu rol es $_SESSION[rol].</div>";
    //}else{
      //  echo "</div>";
    //}
    
// Función que carga el cuadro de inicio de sesión.
// Placeholder es el campo donde escribes y lo quep one por defecto.
// IF !isset significa si no estás autenticado.
function cuadroLogin(){
    if(!isset($_SESSION['autenticado'])){
        echo "<div class='col-2 formuLogin'>
              Inicia sesión
                <form name='iniciaSesion' id='formularioSesion' method='post' action='control.php'>
                    <input type='text' name='login' placeholder='Usuario' required /><br>
                    <input type='password' name='password' placeholder='Contraseña' required /><br>
                    <input type='submit' name='autenticar' value='Iniciar sesión' onclick='inicioSesion(this);' /><br>
                    <p>¿No estás registrado? <a href='Registro.php'>Regístrate ahora, ¡infraser!.</a></p>
                </form>
            </div>";  
    }else{
        
        echo "<div class='avisoSesion'>
        
            Cierra sesión para entrar con otro usuario 
        
            </div>";
        
    
    }
    
}


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