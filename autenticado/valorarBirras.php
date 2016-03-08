<?php

// Incluir funciones.php, control.php y config.php
        include_once '../funciones.php';
        include_once '../control.php';
        include_once '../config/config.php';
        
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
             $sql="SELECT *, AVG(puntuacion) as media"
                    . " FROM cervezas, valoracion"
                    . " WHERE cervezas.idcervezas = valoracion.idcervezas"
                    . " and cervezas.idcervezas='$_GET[idcervezas]';";
             $resultado= mysqli_query($conexion, $sql);
             $mediaNueva=  mysqli_fetch_array($resultado)['media'];
                    
             mysqli_close($conexion);
        
             exit($mediaNueva);
        }
        exit('error');
     ?>