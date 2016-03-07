
<!DOCTYPE html>
<!--
Bier0n es una aplicación web sobre cerveza.
Copyright (C) 2016  José María Rodríguez Toledo.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bier0n | Versión de pruebas</title>
        <link rel="stylesheet" href="./css/estilos.css" type="text/css"/>
        <script type="text/javascript" src="./js/javascript.js"></script>
    </head>
    <body onload='cambiaFrase();'>
        
        <?php
        
        // Incluir funciones.php y control.php
        include_once 'funciones.php';
        include_once 'control.php';
        
        // Inicia la sesión (en funciones.php)
        session_start();
       
        ?>
        
        <!--Llamada a la cabecera-->
        
        <div class='col-12 cabecera'>
          <?php cabecera(); ?>
        </div>
        <hr />
        
        <!— Menú —>
            <div class="col-12 menu">
                <ul>
                    <li><a href='index.php'>Inicio</a></li>
                    <li><a href='autenticado/nuevaBirra.php'>Subir Birras</a></li>
                    <li><a href='autenticado/topTen.php'>Mejor Valoradas</a></li>
                    <li><a href="about.php">Sobre bier0n</a></li>
                    <li><a href="autenticado/valoraOtras"></a>Juzga</li>
                    <li><a href="autenticado/cerrar.php">Cerrar sesión</a></li>
                </ul>
            </div>
         Bienvenido infraser:
        
        Bier0n es un proyecto web desarrollado por Piticlis Productions con el fin de crear un espacio donde sus propios usuarios puedan indicar diferentes tipos de cerveza (dando los datos de la misma), donde se puede adquirir y entrar a valorar tanto las que ellos indican como otras ya indicadas anteriormente.
        
        El reponsable de la aplicación no se hace responsable del uso indebido de la misma.
    </body>
</html>
