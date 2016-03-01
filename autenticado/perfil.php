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
                    <input type='submit' value='Enviar' name='enviaBirra' />
        </form>
        </div>
        
         <div class="col-3 formuValora">
            <div class="valoraTitulo">
               Coméntala y Valórala
            </div>
           <hr/>
        <form name='formuValora' id='formuValora' method='post' action='enviaValora.php'>
                    <input type='text' name='puntuacion' placeholder='Puntua aquí' required />Pon la marca<br>
                    <input type='text' name='comentario' placeholder='Comenta aquí' required />Di el modelo<br>
                    <input type='submit' value='Enviar' name='enviaValora' />
        </form>
        </div>
        
    </body>
</html>