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
            
            
            // Conecta con la BBDD
            echo "Conectando con el sistema gestor de bases de datos... ";
                $conex = mysqli_connect($host, $user, $password) or die("Error en la conexión.");
                echo "OK.<br>Creando la base de datos $database... ";
            // Crea la BBDD
                $sql = "create database $database ;";
                mysqli_query($conex, $sql) or die("Error al crear la base de datos.");
                echo "OK.<br>Creando la tabla 'usuarios'... ";
            // Usa la BBDD
                $sql = "use $database;";
                mysqli_query($conex, $sql) or die("Error al utilizar la base de datos.");

                 //1 Consulta SQL que crea la tabla de usuarios.
                $sql = "CREATE TABLE if not exists usuarios (
                login VARCHAR(20) NOT NULL,
                password VARCHAR(300) NOT NULL,
                edad INT(2) NOT NULL,
                sexo SET('Hombre','Mujer') NOT NULL,
                rol SET('Administrador','Registrado') NOT NULL default 'Registrado',
                PRIMARY KEY (login)
            )   ENGINE=InnoDB;";
                mysqli_query($conex, $sql) or die("Error al crear la tabla usuarios.".mysqli_error($conex));
                
                echo "OK.<br>Creando la tabla 'cervezas'...";
                
                mysqli_query($conex, $sql) or die("Error al utilizar la base de datos.");
              
               
                 //2 Consulta SQL que crea la tabla de cervezas.
                $sql = "CREATE TABLE if not exists cervezas (
                idcervezas INT(15) NOT NULL AUTO_INCREMENT,
                nombre VARCHAR(30) NOT NULL,
                modelo VARCHAR (40) NOT NULL,
                graduacion INT(3) NOT NULL,
                imagen VARCHAR(2) NOT NULL,
                 PRIMARY KEY (idcervezas)
               )  ENGINE=InnoDB;";    
               mysqli_query($conex, $sql) or die("Error al crear la tabla cervezas.".mysqli_error($conex));
               
                echo "OK.<br>Creando la tabla 'establecimientos'...  ";
                
                 mysqli_query($conex, $sql) or die("Error al utilizar la base de datos.");
                 
                  //3 Consulta SQL que crea la tabla de establecimientos.
                $sql = "CREATE TABLE if not exists establecimientos (
                idestablecimientos INT(20) NOT NULL AUTO_INCREMENT,
                dirección VARCHAR(30) NOT NULL,
                ciudad VARCHAR(30),
                precio INT(40) NOT NULL,
                nombreestablecimiento INT (40) NOT NULL,
                PRIMARY KEY (idestablecimientos)
                  )  ENGINE=InnoDB;";    
                mysqli_query($conex, $sql) or die("Error al crear la tabla establecimientos:.".mysqli_error($conex));
               
                echo "OK.<br>Creando la tabla 'valoración'...  ";
                
                 mysqli_query($conex, $sql) or die("Error al utilizar la base de datos.");
                 
                   //4 Consulta SQL que crea la tabla de valoración.
                $sql = "CREATE TABLE if not exists valoración (
                idcervezas INT(20) NOT NULL,
                login VARCHAR(20) NOT NULL,
                puntuación INT(2) NOT NULL,
                comentario VARCHAR(350) NOT NULL,
                fechasubida TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (idcervezas) REFERENCES cervezas(idcervezas),
                FOREIGN KEY (login) REFERENCES usuarios(login),
                PRIMARY KEY (idcervezas, login)
                  )  ENGINE=InnoDB;";    
                mysqli_query($conex, $sql) or die("Error al crear la tabla valoración.".mysqli_error($conex));
               
                echo "OK.<br>Creando la tabla 'cervezasestablecimientos´...  ";
                
                 mysqli_query($conex, $sql) or die("Error al utilizar la base de datos.");
                 
                   //5 Consulta SQL que crea la tabla de cervezasestablecimientos.
                $sql = "CREATE TABLE if not exists `bieron`.`cervezasestablecimientos` (
                idcervezas INT(20) NOT NULL,
                idestablecimientos INT(15) NOT NULL,
                FOREIGN KEY (idcervezas) REFERENCES cervezas(idcervezas),
                FOREIGN KEY (idestablecimientos) REFERENCES establecimientos(idestablecimientos),
                PRIMARY KEY (idcervezas, idestablecimientos)
                  )  ENGINE=InnoDB;";    
                mysqli_query($conex, $sql) or die("Error al crear la tabla cervezasestablecimientos.".mysqli_error($conex));
               
                echo "OK.<br>`SUCCES´  ";
                
                 
        ?>
        
    </body>
</html>
