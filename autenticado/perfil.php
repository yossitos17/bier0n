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
               Vamos a ver, ¿Qué birra es?
            </div>
           <hr/>
        <form name='formuCervezas' id='formuCervezas' method='post' action='control.php'>
                    <input type='text' name='nombrecerveza' placeholder='Nombre' required /><br>
                    <input type='text' name='modelo' placeholder='Modelo' required /><br>
                    <input type='text' name='graduacion' placeholder='Graduación' required /><br>
                    <input type='text' name='modelo' placeholder='Modelo' required /><br>
                    
        </form>
        </div>
        
         <div class="col-3 formuEstablecimientos">
            <div class="estableciTitulo">
                Y ahora, ¿Dónde se puede conseguir?
            </div>
           <hr/>
        <form name='formuCervezas' id='formuCervezas' method='post' action='control.php'>
                    <input type='text' name='direccion' placeholder='Dirección' required /><br>
                    <input type='text' name='ciudad' placeholder='Ciudad' required /><br>
                    <input type='text' name='precio' placeholder='Precio' required /><br>
                    <input type='text' name='local' placeholder='Nombre del establecimiento' required /><br>         
        </form>
        </div>
    </body>
</html>