
<?php
session_start();
  include_once('../otros/conexion.php');
  //   CREATE
  if (isset($_POST['btnagregar']))
  {
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $descripcion = $_POST['descripcion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $sql = "INSERT INTO clinica (nombre, direccion, descripcion, telefono, email)
        VALUES ('$nombre','$direccion','$descripcion','$telefono','$email')";
        $conexion->query($sql);

        $_SESSION ['message'] = "Clínica Agregada con Éxito!";
        $_SESSION ['color'] = "success";

        header('location: ../admin/index_admin.php?page=../clinica/clinica_listado.php');
            

  }

  //  UPDATE
  if (isset($_POST['btneditar']))
  {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $descripcion = $_POST['descripcion'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        

        $sql = "UPDATE clinica SET nombre='$nombre', direccion='$direccion', 
        descripcion='$descripcion', telefono='$telefono', email='$email' 
        WHERE id=$id";
        
        if (!mysqli_query($conexion, $sql)) {
            die("Error al actualizar la clínica: " . mysqli_error($conexion));
        }
        
        $conexion->query($sql);

        
        $_SESSION ['message'] = "Clínica Actualizada con Éxito!";
        $_SESSION ['color'] = "warning";

        header('location: ../admin/index_admin.php?page=../clinica/clinica_listado.php');
  }


  // ELIMINAR con $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    

    // Luego, elimina el registro de la base de datos
    $sql = "DELETE FROM clinica WHERE id=$id";
    $conexion->query($sql);

    
    $_SESSION ['message'] = "Clínica Eliminada con Éxito!";
    $_SESSION ['color'] = "danger";
    
    header('location: ../admin/index_admin.php?page=../clinica/clinica_listado.php');
}


//  LOGIN
  if (isset($_POST['btnlogin']))
  {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Consulta para validar el usuario (sin encriptación ni prepared statements)
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND contrasenia = '$password'";
    $result = $conexion->query($sql);
    
    // Verificar si las credenciales son correctas
    if ($result->num_rows > 0) {
        // Redireccionar al index con plantilla si el login es exitoso
        $_SESSION['email'] = $email;
        header("Location: index_admin.php");
        exit();
    } else {
        header("Location: login.php");
    }
    
  }
  

?>