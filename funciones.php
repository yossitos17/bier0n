<?php

// Paso de los roles a valor numérico para facilitar
// las funciones de seguridad.

define("Administrador", 100);
define("Registrado", 50);

    // Muestra el mensaje de bienvenida si la sesión está iniciada.
    if(isset($_SESSION['autenticado'])){
        echo "Bienvenido, $_SESSION[usuario], tu rol es $_SESSION[rol].</div>";
    }else{
        echo "</div>";
    }


?>