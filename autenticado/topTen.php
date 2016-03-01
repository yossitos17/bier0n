<!DOCTYPE html>
<!--
Bier0n es una aplicación web sobre cerveza.
Copyright (C) 2016  Piticlis Productions.
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
          
        
 // Incluir funciones.php, control.php y config.php
        include_once '../funciones.php';
        include_once '../control.php';
        include_once '../config/config.php';
        
        seguridad('Registrado'); 
        
        
         $conexion = mysqli_connect($host, $user, $password, $database, $port) 
                or die("Error en "
                . "la conexión con la Base de Datos.".mysqli_error($conexion));
         
         
        ?>
        
        <table>
            <tr><th>Nombre</th><th>Modelo</th><th>Graduación</th><th>Nombre Establecimiento</th><th>Dirección</th><th>Ciudad</th><th>Precio</th><th>Puntuación</th><th>Comentario</th></tr>
            
            <?php
            
           //Selecciona de cada tabla lo que necesito y luego se manda en forma de tabla creando variables con $
            $sqlCervezas="select * from cervezas limit 10;";
            $resultadoCervezas=mysqli_query($conexion, $sqlcervezas);
            $sqlEstablecimientos="select * from establecimientos limit 10;";
            $resultadoEstablecimientos=  mysqli_query($conexion,$sqlestablecimientos);
            $sqlValoracion="select * from valoracion limit 10;";
            $resultadoValoracion=mysqli_query($conexion, $sqlValoracion);
            while($filasCervezas=mysqli_fetch_array($resultadoCervezas,MYSQLI_ASSOC)  && $filasEstablecimientos=mysqli_fetch_array($resultadoEstablecimientos,MYSQLI_ASSOC) && $filasValoracion=mysqli_fetch_array($resultadoValoracion,MYSQLI_ASSOC) ){
                echo "<tr><td>$filasCervezas[nombre]</td><td>$filasCervezas[modelo]</td><td>$filasCervezas[graduacion]</td><td>$filasEstablecimientos[nombreestablecimiento]</td><td>$filasEstablecimientos[direccion]</td><td>$filasEstablecimientos[ciudad]</td><td>$filasEstablecimientos[precio]</td><td>$filasValoracion[puntuacion]</td><td>$filasValoracion[comentario]</td></tr>";
            }
                echo"</table>";
            ?>
    </body>
</html>
