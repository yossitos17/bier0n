<!DOCTYPE html>
<!--
Bier0n es una aplicación web sobre cerveza.
Copyright (C) 2016  José María Rodríguez Toledo.

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
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
        
        // Incluir funciones.php y control.php
        include_once 'funciones.php';
        include_once 'control.php';
        
        // Inicia la sesión.
        session_start();
        
        // El Login.
        
        cuadroLogin();
        ?>
        
        <!--Llamada a la cabecera-->
        
        <div class='col-12 cabecera'>
          <?php cabecera(); ?>
        </div>
        <hr />
       
    </body>
</html>
