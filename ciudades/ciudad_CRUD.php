
<?php
session_start();
  include_once('../otros/conexion.php');
  //   CREATE
  if (isset($_POST['btnagregar']))
  {
        $nombre = $_POST['nombre'];
        $sql = "INSERT INTO ciudades (nombre) VALUES ('$nombre')";
        $conexion->query($sql);

        $_SESSION ['message'] = "Ciudad Agregada con Éxito!";
        $_SESSION ['color'] = "success";

        header('location: ../admin/index_admin.php?page=../ciudades/ciudad_listado.php');
            

  }

  //  UPDATE
  if (isset($_POST['btneditar']))
  {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        

        $sql = "UPDATE ciudades SET nombre='$nombre' WHERE id=$id";
        
        if (!mysqli_query($conexion, $sql)) {
            die("Error al actualizar la ciudad: " . mysqli_error($conexion));
        }
        
        $conexion->query($sql);

        
        $_SESSION ['message'] = "Ciudad Actualizada con Éxito!";
        $_SESSION ['color'] = "warning";

        header('location: ../admin/index_admin.php?page=../ciudades/ciudad_listado.php');
  }


  // ELIMINAR con $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    try {
      // Ejecuta la consulta de eliminación
      $sql = "DELETE FROM ciudades WHERE id=$id";
    $conexion->query($sql);

      // Si se eliminó con éxito
      $_SESSION ['message'] = "Ciudad Eliminada con Éxito!";
      $_SESSION ['color'] = "danger";
  } catch (mysqli_sql_exception $e) {
      // Captura el error y almacénalo en la sesión
      $_SESSION['message'] = "Error al eliminar la ciudad: " . htmlspecialchars($e->getMessage());
      $_SESSION['color'] = "danger";
  }

    header('location: ../admin/index_admin.php?page=../ciudades/ciudad_listado.php');

    
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