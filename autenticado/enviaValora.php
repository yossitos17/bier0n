<?php


 // Incluir funciones.php, control.php y config.php
        include_once '../funciones.php';
        include_once '../control.php';
        include_once '../config/config.php';
        
        seguridad('Registrado'); 
        
        if(isset($_POST['enviaValora'])){
             $conexion = mysqli_connect($host, $user, $password, $database, $port) 
                or die("Error en "
                . "la conexión con la Base de Datos.".mysqli_error($conexion));
             
             $puntuacion=$_POST['puntuacion'];
             $comentario=$_POST['comentario'];
             
             $sql="insert into valoracion (puntuacion, comentario) values ('$puntuacion','$comentario');";
             mysqli_query($conexion, $sql) or die ("No ha podido mandar nada a Valoración");
        }
        
?>