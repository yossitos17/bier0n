<!DOCTYPE html>
<!--
Bier0n es una aplicación web sobre cerveza.
Copyright (C) 2016  José María Rodríguez Toledo.
-->

<html>
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
        
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>
                <div class="panel-body">
                    <?php
                    if(!isset($_SESSION['autenticado'])){
                        echo "<div class='form-group'>
                    <p><h3>Inicia sesión</h3></p>
                    <form name='iniciaSesion' id='formularioSesion' method='post' action='control.php'>
                        <input type='text' name='login' placeholder='Usuario' required /><i>Ej: Bacalao@ConTomate.com</i><br>
                        <input type='password' name='password' placeholder='Contraseña' required /><br>
                        <input type='submit' name='autenticar' value='Iniciar sesión' onclick='inicioSesion(this);' /><br>
                         <br>
                        <p>¿No estás registrado? <a href='Registro.php'>Regístrate ahora, ¡infraser!.</a></p>
                    </form>
            </div>";  
            }else{
        
        echo    "<div class='avisoSesion'>
        
                    Cierra Sesión para entrar con otro usuario 
        
                </div>";
        
    
    }
    
    ?>
    </div>
                <div class="panel-footer"><?php piePagina(); ?></div>
            </div>
            
        </div>
      </div>  
    </body>
</html>
