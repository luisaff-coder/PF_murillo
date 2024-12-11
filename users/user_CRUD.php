
<?php
session_start();
  include_once('../otros/conexion.php');
  //   CREATE
  if (isset($_POST['btnagregar']))
  {
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = trim($_POST['email']);
        $password = $_POST['password'];
        $rol = $_POST['rol'];
        $status = $_POST['status'];

        $sql_check_email = "SELECT * FROM users WHERE email = '$email'";
        $result = $conexion->query($sql_check_email);

        // Si el email ya está registrado
        if ($result->num_rows > 0) {
            // Si el correo existe, muestra un mensaje de error
            header('Location: index_admin.php?page=user_formulario.php');
            $_SESSION['message'] = "Este correo ya esta en uso";
            $_SESSION['color'] = "danger";
            //echo "Error: El correo electrónico '$email' ya está registrado.";
        } else {
            // Procesar la imagen
            $imagen = $_FILES['imagen']['name'];
            $file= $_FILES["imagen"];
              $nombreImg= $file["name"];
              $ruta_prov= $file["tmp_name"];
            $carpeta = "../users/nube/";
            //$target_file = $target_dir . basename($imagen);
            $src = $carpeta.$nombreImg;
                $imagen="../users/nube/".$nombreImg;
                move_uploaded_file($ruta_prov, $src);

        $sql = "INSERT INTO users (nombre, apellidos, email, password, rol, imagen, status)
        VALUES ('$nombre', '$apellidos', '$email', '$password', '$rol', '$imagen', '$status')";
        $conexion->query($sql);

        $_SESSION ['message'] = "User Agregado con Éxito!";
        $_SESSION ['color'] = "success";

        header('location: ../admin/index_admin.php?page=../users/user_listado.php');
            
        }
  }

  //  UPDATE
  if (isset($_POST['btneditar']))
  {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rol = $_POST['rol'];
        $status = $_POST['status'];
        

        $sql = "UPDATE users SET nombre='$nombre', apellidos='$apellidos',
         email='$email', password='$password', rol='$rol', 
         status='$status' WHERE id=$id";
        
        if (!mysqli_query($conexion, $sql)) {
            die("Error al actualizar el user: " . mysqli_error($conexion));
        }
        
        $conexion->query($sql);

        
        $_SESSION ['message'] = "User Actualizado con Éxito!";
        $_SESSION ['color'] = "warning";

        header('location: ../admin/index_admin.php?page=../users/user_listado.php');
  }


  // ELIMINAR con $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    
    try{
      // Luego, elimina el registro de la base de datos
    $sql = "DELETE FROM users WHERE id=$id";
    $conexion->query($sql);

    
    $_SESSION ['message'] = "User Eliminado con Éxito!";
    $_SESSION ['color'] = "danger";
    } catch (mysqli_sql_exception $e){
      // Captura el error y almacénalo en la sesión
      $_SESSION['message'] = "Error al eliminar el user: " . htmlspecialchars($e->getMessage());
      $_SESSION['color'] = "danger";
    }
    
    header('location: ../admin/index_admin.php?page=../users/user_listado.php');
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