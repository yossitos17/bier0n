<!DOCTYPE html>
<!--
Bier0n es una aplicación web sobre cerveza.
Copyright (C) 2016  José María Rodríguez Toledo.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bier0n | Versión de pruebas</title>
        <link rel="stylesheet" href="../css/estilos.css" type="text/css"/>
        <script type="text/javascript" src="../js/javascript.js"></script>
    </head>
    <body onload='cambiaFrase();'>
        
        <?php
        
        // Incluir funciones.php y control.php
        include_once '../funciones.php';
        include_once '../control.php';
        
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
                    <li><a href='../index.php'>Inicio</a></li>
                    <li><a href='nuevaBirra.php'>Subir Birras</a></li>
                    <li><a href='topTen.php'>Mejor Valoradas</a></li>
                    <li><a href="../about.php">Sobre bier0n</a></li>
                    <li><a href="cerrar.php">Cerrar sesión</a></li>
                </ul>
            </div>

       
        <div class="col-3 formuCervezas">
            <div class="cerveTitulo">
               Vamos a ver, ¿Qué birra es y donde la pillas?
            </div>
           <hr/>
        <form name='formuCervezas' id='formuCervezas' method='post' action='enviaBirra.php'>
                    <input type='text' name='nombrecerveza' placeholder='Nombre' required />Marca<br>
                    <input type='text' name='modelo' placeholder='Modelo' required />Modelo<br>
                    <input type='text' name='graduacion' placeholder='Graduación' required />Graduación (solo dígitos)<br>
                    <input type='text' name='imagen' placeholder='Imagen' required />URL Imagen<br>
                    <hr />
                    <input type='text' name='direccion' placeholder='Dirección' required />Dirección<br>
                    <input type='text' name='local' placeholder='Nombre del establecimiento' required />Establecimiento<br>
                    <input type='text' name='ciudad' placeholder='Ciudad' required />Ciudad<br>
                    <input type='text' name='precio' placeholder='Precio' required />€<br>
                    <br>
                    <input type='text' name='puntuacion' placeholder='Puntua aquí' required />Puntúala<br>
                    <textarea name="comentario" placeholder="Deja aquí tu comentario" rows="15" cols="30"></textarea>
                    <input type='submit' value='Enviar' name='enviaBirra' />
        </form>
        </div>
        
       <div class="piePagina">
            <?php
                // Pie de página.
                piePagina();
            ?>
        </div>
        
    </body>
</html>