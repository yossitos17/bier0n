<?php

// Paso de los roles a valor numérico para facilitar
// las funciones de seguridad.

define("Administrador", 100);
define("Registrado", 50);

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
              <h4>Inicia sesión</h4>
                <form name='iniciaSesion' id='formularioSesion' method='post' action='control.php'>
                    <input type='text' name='login' placeholder='Usuario' required /><br>
                    <input type='password' name='password' placeholder='Contraseña' required /><br>
                    <input type='submit' name='autenticar' value='Iniciar sesión' onclick='inicioSesion(this);' /><br>
                    <p>¿No estás registrado? <a href='Registro.php'>Regístrate ahora, ¡infraser!.</a></p>
                </form>
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
    echo "Bier0n | <div style='display: span' id='frase'> </div>";
}
?>