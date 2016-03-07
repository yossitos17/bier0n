<?php

// Inicia la sesión (en funciones.php)
        session_start();

//Para que no pueda entrar otro que no sea 'registrado'        
        seguridad('Registrado'); 
        
        
        if(isset($_GET['puntuacion'])&& isset($_GET['idcervezas'])){
             $conexion = mysqli_connect($host, $user, $password, $database, $port) 
                or die("Error en "
                . "la conexión con la Base de Datos.".mysqli_error($conexion));
             
             $sql="insert into valoracion values('$_GET[idcervezas]','$_SESSION[login]','$_GET[puntuacion]','');";
             mysqli_query($conexion, $sql);
             mysqli_close($conexion);
        }
             header("Location:topTen.php");
             exit();
     ?>