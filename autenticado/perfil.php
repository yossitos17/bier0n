          <?php
        
        // Incluir funciones.php y control.php
        include_once '../funciones.php';
        include_once '../control.php';
        
        // Inicia la sesión.
        session_start();
       
       //Aquí comprueba la seguridad que está en funciones.php
        seguridad("Registrado");
        
       ?>
        

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bier0n | Versión de pruebas</title>
        <link rel="stylesheet" href="../css/estilos.css" type="text/css"/>
        <script type="text/javascript" src="../js/javascript.js"></script>
    </head>
    <body onload='cambiaFrase();'>
        
        
        <!--Llamada a la cabecera-->
        <div class='col-12 cabecera'>
          <?php cabecera(); ?>
        </div>
        <hr />
        
        <!— Menú —>
            <div class="col-12 menu">
                <ul>
                    <li><a href='../index.php'>Inicio</a></li>
                    <li><a href='/perfil.php'>Mi Perfil</a></li>
                    <li><a href='autenticado/misBirras.php'>Birras Subidas</a></li>
                    <li><a href="about.php">Sobre bier0n</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="topTen.php">Todas las cervezas</a></li>
                    <li><a href="/cerrar.php">Cerrar sesión</a></li>
                </ul>
            </div>
       
        <div class="col-3 formuCervezas">
            <div class="cerveTitulo">
               Vamos a ver, ¿Qué birra es y donde la pillas?
            </div>
           <hr/>
        <form name='formuCervezas' id='formuCervezas' method='post' action='enviaBirra.php'>
                    <input type='text' name='nombrecerveza' placeholder='Nombre' required />Pon la marca<br>
                    <input type='text' name='modelo' placeholder='Modelo' required />Di el modelo<br>
                    <input type='text' name='graduacion' placeholder='Graduación' required />Grados que lleva<br>
                    <input type='text' name='imagen' placeholder='Imagen' required />¡Ilústranos!<br>
                    <hr />
                    <input type='text' name='direccion' placeholder='Dirección' required />Pon la dirección<br>
                    <input type='text' name='local' placeholder='Nombre del establecimiento' required />¿Aca donde?<br>
                    <input type='text' name='ciudad' placeholder='Ciudad' required />Ciudad<br>
                    <input type='text' name='precio' placeholder='Precio' required />Di lo que vale<br>
                    <br>
                    <input type='text' name='puntuacion' placeholder='Puntua aquí' required />Pon la marca<br>
                    <textarea name="comentario" placeholder="Comenta aquí tu vaina" rows="15" cols="30"></textarea>
                    <input type='submit' value='Enviar' name='enviaBorra' />
        </form>
        </div>
       
        
    </body>
</html>