
<!DOCTYPE html>
<!--
Bier0n es una aplicación web sobre cerveza.
Copyright (C) 2016  José María Rodríguez Toledo.
-->

<head>
        <meta charset="UTF-8">
        <title>Bier0n | Versión de pruebas</title>
        <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="./css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="./css/estilos.css" type="text/css"/>
        <script type="text/javascript" src="./js/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="./js/javascript.js"></script>
        <script type="text/javascript" src="./js/bootstrap.min.js"></script>
 </head>
    <body onload='cambiaFrase();'>
        <div class="container">
        
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
        <div class="row fondo">   
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><?php cabecera(); ?></a>
                </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href='autenticado/nuevaBirra.php'>Subir Birras</a></li>
                        <li><a href='autenticado/topTen.php'>Mejor Valoradas</a></li>
                        <li><a href="about.php">Sobre bier0n</a></li>
                        <li><a href="autenticado/cerrar.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </nav>
        </div> 
        
        <div class="about">
         Bienvenido infraser:
        
        Bier0n es un proyecto web desarrollado por Piticlis Productions con el fin de crear un espacio donde sus propios usuarios puedan indicar diferentes tipos de cerveza (dando los datos de la misma), donde se puede adquirir y entrar a valorar tanto las que ellos indican como otras ya indicadas anteriormente.
        
        El reponsable de la aplicación no se hace responsable del uso indebido de la misma.
        
        </div>
        
        <div class="piePagina">
            <?php
                // Pie de página.
                piePagina();
            ?>
        </div>
      </div>  
    </body>
</html>
