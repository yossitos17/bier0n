<!DOCTYPE html>
<!--
Bier0n es una aplicación web sobre cerveza.
Copyright (C) 2016  Piticlis Productions.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Bier0n | Versión de pruebas</title>
        <link rel="stylesheet" href="../css/estilos.css" type="text/css"/>
        <script type="text/javascript" src="../js/javascript.js"></script>
        <script src="../js/jquery-2.2.0.min.js"></script>
        <script> 
            function mandar(cerveza){
                var puntuacion=document.getElementById(cerveza).value;
                $.ajax({
                     url: 'valorarBirras.php',  
                        type: 'GET',
                        data:{puntuacion:puntuacion , idcervezas: cerveza},
         
           
            success: function(data){
                        $('#media'+cerveza).html(data);
                        //media.innerHTML=data;
                        alert(data);
            },
            //si ha ocurrido un error
            error: function(){
				 alert('Error en valoracion');
            }
        });
            }
        </script>
    </head>
    <body onload='cambiaFrase();'>
        
         <?php
          
        
 // Incluir funciones.php, control.php y config.php
        include_once '../funciones.php';
        include_once '../control.php';
        include_once '../config/config.php';
        
        // Inicia la sesión (en funciones.php)
        session_start();
        
        seguridad('Registrado'); 
        
        
         $conexion = mysqli_connect($host, $user, $password, $database, $port) 
                or die("Error en "
                . "la conexión con la Base de Datos.".mysqli_error($conexion));
         
         
        ?>
        
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
        
        <table>
            <tr><th>Nombre</th><th>Modelo</th><th>Graduación</th><th>Media</th></tr>
            
            <?php
            
           //Selecciona de cada tabla lo que necesito y luego se manda en forma de tabla creando variables con $
         
            $sqlCervezas="SELECT *, AVG(puntuacion) as media"
                    . " FROM cervezas, valoracion"
                    . " WHERE cervezas.idcervezas = valoracion.idcervezas"
                    . " GROUP BY cervezas.idcervezas;";
            
            $resultadoCervezas=mysqli_query($conexion, $sqlCervezas) or die (mysqli_error($conexion)); 
            //$sqlEstablecimientos="select * from establecimientos limit 10;";
            //$resultadoEstablecimientos=  mysqli_query($conexion,$sqlestablecimientos);
            while($filasCervezas=mysqli_fetch_array($resultadoCervezas,MYSQLI_ASSOC)){ 
                echo "<tr><td>$filasCervezas[nombre]</td><td>$filasCervezas[modelo]</td><td>$filasCervezas[graduacion]</td><td id='media$filaCervezas[idcervezas]'>$filasCervezas[media]</td>"
                        . "<td><input id='$filasCervezas[idcervezas]' type='text' pattern='\d\d'/></td><td><button onclick='mandar( \"$filasCervezas[idcervezas]\");'>valora</button></td></tr>";
            }
                echo"</table>";
            ?>
    </body>
</html>