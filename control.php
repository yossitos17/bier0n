<?php

/*
 * Controla el proceso de autenticación y las variables de sesión.
 */
// Verificamos que venimos del formulario de autenticación.
if(isset($_POST['autenticar'])){ 
    include_once 'config/config.php';

    // Conexión con la base de datos.
    $conexion= mysqli_connect($host, $user, $password, $database, $port) or die("<br>Error"
            . " en la conexion con la Base de Datos ".mysqli_error($conexion));

    // Evitamos un ataque de inyección SQL en el login o el password.
    $login = mysqli_real_escape_string($conexion,$_POST['login']); 
    $pass = mysqli_real_escape_string($conexion,$_POST['password']);

    // Consulta SQL.
    $sql="select * from usuarios where login='$login' and password=PASSWORD('$pass');";

    // Realizamos la consulta SQL y guardamos el resultado.
    $resultado= mysqli_query($conexion, $sql) or die(mysqli_error($conexion));

    // Obtenemos el número de filas que devuelve la consulta.
    $numFilas=  mysqli_num_rows($resultado);

    // Si solo hay una fila, crea una sesión con esas credenciales.
    if($numFilas==1){
        $fila=  mysqli_fetch_array($resultado,MYSQLI_ASSOC);
       
        //Crea una sesion o la propaga. 
        session_start(); 
     
        //Fijamos las credenciales de sesión.
        $_SESSION['autenticado'] = TRUE;
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['rol'] = $fila['rol'];
        
        
        // Devolvemos al usuario a la página de inicio.
       header("Location: autenticado/nuevaBirra.php");
       
    }else{
    
        // Si el login es incorrecto, devuelve a la página
        // de inicio con un mensaje de error.
        header("Location: index.php?error=Fallo en el usuario o la contraseña");
    }
} 
?>