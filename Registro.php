<?php
include_once 'funciones.php';

if(isset($_POST['registrar'])){
        include_once 'config/config.php';
        include_once 'funciones.php';
             
        // Conexión con la base de datos.
        $conexion = mysqli_connect($host, $user, $password, $database, $port) 
                or die("Error en "
                . "la conexión con la Base de Datos.".mysqli_error($conexion));
        // Inserción SQL del usuario. 
        // Solo inserta login, password y email porque la BBDD
        // asigna los valores por defecto de los demás campos.
        $sql="insert into usuarios (login, password, sexo, edad) values('$_POST[login]',"
            . "PASSWORD('$_POST[password]'), '$_POST[sexo]','$_POST[edad]');";
        mysqli_query($conexion,$sql) or die("Error al insertar Usuario."
              .mysqli_error($conexion));
        // Cierre de la conexión. Se devuelve al usuario
        // a la página principal.
        mysqli_close($conexion);
        header("Location: index.php");
    }
?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/estilos.css" type="text/css"/> 
    <script type="text/javascript" src="./js/javascript.js"></script>
    <title>Registro</title>
  </head>
  <body onload='cambiaFrase();'>
      
    <?php include_once 'funciones.php'; ?>
      
      <div class='col-12 cabecera'>
           <?php cabecera(); ?>
        </div>
      <hr />
      <div class="col-5 formuRegistro">
          Regístrate y no protestes
          <form name="registro_form" id="formularioRegistro" method="POST" action="" onsubmit="return registro();">
            <input type="text" name="login" placeholder="Correo Electrónico" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/> Ej: bacalao@contomate.com<br>
            <input type="password" name="password" placeholder="Contraseña" required/><br><br/>
             <input type="radio" name="sexo" value="Hombre" checked>Shurmano<br>
             <input type="radio" name="sexo" value="Mujer">Shurmana<br><br/>
            <label for="so2">¿Cuántos años tienes?</label> <br/><br/>
            <input type="radio" name="edad" value="020" checked> 18-21
                <br>
            <input type="radio" name="edad" value="22-26"> 22-26
                <br>
            <input type="radio" name="edad" value="27-35"> 27-35
                <br>
            <input type="radio" name="edad" value="36-45"> 36-45
                <br>
            <input type="radio" name="edad" value="46-59"> 46-59
                <br>
            <input type="radio" name="edad" value="60+"> +60
                <br>
                <br>
            <br /><br/>
            <input type="submit" name="registrar" value="Registrarse" />
          </form>
      </div>  
  </body>
</html>