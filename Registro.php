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
      
    <?php include_once 'funciones.php'; ?>
      
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
        
      
      <div class="col-4 formuRegistro">
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
            <br />
            <input type="submit" name="registrar" value="Registrarse" />
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