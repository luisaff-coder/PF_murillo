<?php
        session_start();
        // Eliminar todas las variables de sesión
        session_destroy();
        header('location: ../index.php');
?>