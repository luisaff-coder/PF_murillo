<?php
session_start();
include_once('conexion.php');

//   login administrador
if (isset($_POST['loginAdmin'])){

    $email = $_POST['email'];
    $contrasena = $_POST['contra'];

    $query = mysqli_query($conexion, "SELECT * FROM users WHERE email = '".$email."' and password = '".$contrasena."'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        //session_start();
        
        while ( $fila = mysqli_fetch_array($query)){
           
            $_SESSION['sesionId'] = $fila['id'];
            $_SESSION['sesionNombre'] = $fila['nombre'];
            $_SESSION['sesionApellido'] = $fila['apellidos'];
            $_SESSION['sesionImagen'] = $fila['imagen'];
            $_SESSION['sesionFechaCreada'] = $fila['create_at'];
            $_SESSION['email'] = $email;
            echo $fila['create_at'];
            header('location: ../admin/index_admin.php');
        }
        //die("termino");
        
    }else if($nr == 0){
        
        $_SESSION['messageLogin'] = "Correo o Contraseña incorrect@s";
        $_SESSION['color'] = "danger";
        header('location: ../index.php?page=admin/admin.php');
    }
}
//cerrar sesion
if (isset($_POST['cerrarSesion'])){
    session_destroy();
    header("Location: ../index.php?page=admin/admin.php");
}

//   login doctor
if (isset($_POST['loginDoctor'])){

    $email = $_POST['email'];
    $contrasena = $_POST['contra'];

    $query = mysqli_query($conexion, "SELECT * FROM doctores WHERE email = '".$email."' and password = '".$contrasena."'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        //session_start();
        
        while ( $fila = mysqli_fetch_array($query)){
           
            $_SESSION['sesionId'] = $fila['id'];
            $_SESSION['sesionNombre'] = $fila['nombres'];
            $_SESSION['sesionApellido'] = $fila['apellidos'];
            $_SESSION['sesionImagen'] = $fila['imagen'];
            $_SESSION['sesionFechaCreada'] = $fila['create_at'];
            $_SESSION['email'] = $email;
            echo $fila['create_at'];
            header('location: ../doctor/index_doctor.php');
        }
        //die("termino");
        
    }else if($nr == 0){
        
        $_SESSION['messageLogin'] = "Correo o Contraseña incorrect@s";
        $_SESSION['color'] = "danger";
        header('location: ../index.php?page=doctor/doctor.php');
    }
}

//   login paciente
if (isset($_POST['loginPaciente'])){

    $email = $_POST['email'];
    $contrasena = $_POST['contra'];

    $query = mysqli_query($conexion, "SELECT * FROM pacientes WHERE email = '".$email."' and password = '".$contrasena."'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        //session_start();
        
        while ( $fila = mysqli_fetch_array($query)){
           
            $_SESSION['sesionId'] = $fila['id'];
            $_SESSION['sesionNombre'] = $fila['nombres'];
            $_SESSION['sesionApellido'] = $fila['apellidos'];
            $_SESSION['sesionImagen'] = $fila['imagen'];
            $_SESSION['sesionFechaCreada'] = $fila['create_at'];
            $_SESSION['email'] = $email;
            echo $fila['create_at'];
            header('location: ../paciente/index_paciente.php');
        }
        //die("termino");
        
    }else if($nr == 0){
        
        $_SESSION['messageLogin'] = "Correo o Contraseña incorrect@s";
        $_SESSION['color'] = "danger";
        header('location: ../index.php?page=paciente/paciente.php');
    }
}

?>