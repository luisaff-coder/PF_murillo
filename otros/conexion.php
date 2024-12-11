<?php

$host="localhost";
$user="root";
$pass="";
$db="proyecto";

$conexion = new mysqli($host, $user, $pass, $db);

// Check connection
if (!$conexion) {
    die("Conexion fallida: " . mysqli_connect_error());
}

//echo "conectado exitosamente";
//die;

$PLATAFORMAS = array('','Xbox', 'PlayStation','Switch','Steam');


//$GENEROS = array('','Accion', 'Aventura','Terror','RPG','Narrativa');

/*
foreach($DEPARTAMENTOS as $depa)
{
    echo $depa;
    echo "<br>";

} 
*/


?>
