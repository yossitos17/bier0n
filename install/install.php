<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/estilos.css" type="text/css"/> 
        <title>Instalación</title>
    </head>
    <body>
        <?php
         
            include_once '../config/config.php';
            include_once '../funciones.php';
            cabecera();
            
            // Conecta con la BBDD
            echo "Conectando con el sistema gestor de bases de datos... ";
                $conex = mysqli_connect($host, $user, $password) or die("Error en la conexión.");
                echo "OK.<br>Creando la base de datos $database... ";
            // Crea la BBDD
                $sql = "create database $database;";
                mysqli_query($conex, $sql) or die("Error al crear la base de datos.");
                echo "OK.<br>Creando la tabla 'usuarios'... ";
            // Usa la BBDD
                $sql = "use $database;";
                mysqli_query($conex, $sql) or die("Error al utilizar la base de datos.");

                
                
                // Consulta SQL que crea la tabla de usuarios.
                $sql = "CREATE TABLE if not exists `esploras`.`usuarios` (
                `id` INT(15) NOT NULL AUTO_INCREMENT,
                `login` VARCHAR(20) NOT NULL,
                `password` VARCHAR(300) NOT NULL,
                `edad` INT (2) NOT NULL,
                `sexo` SET('Hombre','Mujer') NOT NULL,
                `rol` SET('Administrador', 'Registrado') NOT NULL default 'Registrado',
                PRIMARY KEY (`id`)
            )   ENGINE=InnoDB;";
                mysqli_query($conex, $sql) or die("Error al crear la tabla usuarios.");
                
                echo "OK.<br>Creando la tabla 'documentos'...";
                
                mysqli_query($conex, $sql) or die("Error al utilizar la base de datos.");
                
                
                 // Consulta SQL que crea la tabla de documentos.
                $sql = "CREATE TABLE if not exists `bieron`.`cervezas` (
                `id_documento` INT(20) NOT NULL AUTO_INCREMENT,
                `nombre` VARCHAR(30) NOT NULL,
                `descripcion` TEXT,
                `fecha_subida` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                `publico` BOOLEAN NULL DEFAULT NULL,
                `id_usuario` INT(15) NOT NULL,
                PRIMARY KEY (`id_documento`),
                 foreign key (id_usuario) references usuarios(id)
                  )  ENGINE=InnoDB;";    
                mysqli_query($conex, $sql) or die("Error al crear la tabla Documentos.");
                echo "OK.<br>Creando la tabla 'formatos'...  ";
        ?>
        
    </body>
</html>
