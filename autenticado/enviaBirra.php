<?php

 // Incluir funciones.php, control.php y config.php
        include_once '../funciones.php';
        include_once '../control.php';
        include_once '../config/config.php';
        
        seguridad('Registrado'); 
        
        if(isset($_POST['enviaBirra'])){
             $conexion = mysqli_connect($host, $user, $password, $database, $port) 
                or die("Error en "
                . "la conexión con la Base de Datos.".mysqli_error($conexion));
             
             $nombrecerveza=$_POST['nombrecerveza'];
             $modelo=$_POST['modelo'];
             $graduacion=$_POST['graduacion'];
             $imagen=$_POST['imagen'];
             $direccion=$_POST['direccion'];
             $ciudad=$_POST['ciudad'];
             $precio=$_POST['precio'];
             $local=$_POST['local'];
             
             $sql="insert into cervezas (nombre, modelo, graduacion, imagen) values ('$nombrecerveza','$modelo','$graduacion','$imagen');";
             mysqli_query($conexion, $sql) or die ("No ha podido mandar nada a cervezas");
   
             
             
             $sql="insert into establecimientos (dirección, ciudad, precio, nombreestablecimiento) "
                     . "values ('$direccion','$ciudad','$precio','$local');";
             mysqli_query($conexion, $sql) or die ("No se ha podido mandar nada a establecimientos");
             
             echo "éxito";
             
             header("Location: perfil.php");
        }
        
        ?>
