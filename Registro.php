<?php
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
    <script type="text/javascript" src="./js/javascript.js?1"></script>
    <title>Registro</title>
  </head>
  <body>
    
      <div class='col-12 cabecera'>
           Bier0n | Élite del Etilismo
        </div>
      
      <div class="col-7 formuRegistro">
          <h3>Regístrate y no protestes</h3>
          <form name="registro_form" id="formularioRegistro" method="POST" action="" onsubmit="return registro();">
            <input type="text" name="login" placeholder="Correo Electrónico" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/> Ej: bacalao@contomate.com<br>
            <input type="password" name="password" placeholder="Contraseña" required/><br><br/>
             <input type="radio" name="gender" value="Hombre" checked>Shurmano<br>
             <input type="radio" name="gender" value="Mujer">Shurmana<br><br/>
            <label for="so2">¿Cuántos años tienes?</label> <br/><br/>
            <select id="edad" name="edad" size="7">
            <option value="edad1821" selected="selected">18-21</option>
            <option value="edad2225">22-25</option>
            <option value="edad2630">26-30</option>
            <option value="edad3135">31-35</option>
            <option value="edad3645">36-45</option>
            <option value="edad4660">46-60</option>
            <option value="caminoalatumba">viejales</option>
            </select>
            <br /><br/>
            <input type="submit" name="registrar" value="Registrarse" />
          </form>
      </div>  
  </body>
</html>