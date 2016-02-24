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
        
        // Inicia la sesión.
        session_start();
       
       //Aquí comprueba la seguridad que está en funciones.php
        seguridad("Registrado");
        
       ?>
        
        <!--Llamada a la cabecera-->
        <div class='col-12 cabecera'>
          <?php cabecera(); ?>
        </div>
        <hr />
       
        <form name='iniciaSesion' id='formularioSesion' method='post' action='control.php'>
            <input type='text' name='nombrecerveza' placeholder='Nombre' required /><br>
                    <input type='text' name='modelo' placeholder='Modelo' required /><br>
                    <input type='text' name='graduacion' placeholder='Graduación' required /><br>
                    <input type='text' name='modelo' placeholder='modelo' required /><br>
                    <input type='image' name='imagen' placeholder='imagen' required /><br>
                    
        </form>
    </body>
</html>