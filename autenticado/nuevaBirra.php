<!DOCTYPE html>
<!--
Bier0n es una aplicación web sobre cerveza.
Copyright (C) 2016  José María Rodríguez Toledo.
-->

<head>
        <meta charset="UTF-8">
        <title>Bier0n | Versión de pruebas</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="../css/estilos.css" type="text/css"/>
        <script type="text/javascript" src="../js/jquery-2.2.0.min.js"></script>
        <script type="text/javascript" src="../js/javascript.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
    <body onload='cambiaFrase();'>
        <div class="container">
        
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
        <div class="row fondo">   
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><?php cabecera(); ?></a>
                </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href='../autenticado/nuevaBirra.php'>Subir Birras</a></li>
                        <li><a href='../autenticado/topTen.php'>Mejor Valoradas</a></li>
                        <li><a href="../about.php">Sobre bier0n</a></li>
                        <li><a href="../autenticado/cerrar.php">Cerrar sesión</a></li>
                    </ul>
                </div>
            </nav>
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
                    <hr />
                    <input type='text' name='direccion' placeholder='Dirección' required />Dirección<br>
                    <input type='text' name='nombrelocal' placeholder='Nombre del establecimiento' required />Establecimiento<br>
                    <input type='text' name='ciudad' placeholder='Ciudad' required />Ciudad<br>
                    <input type='text' name='precio' placeholder='Precio' required />€<br>
                    <br>
                    <input type='text' name='puntuacion' placeholder='Puntua aquí' required />Puntúala (de 10 a 99)<br>
                    <textarea name="comentario" placeholder="Deja aquí tu comentario" rows="10" cols="35"></textarea>
                    <input type='submit' value='Enviar' name='enviaBirra' />
        </form>
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