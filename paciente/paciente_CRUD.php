
<?php
session_start();
  include_once('../otros/conexion.php');
  //   CREATE
  if (isset($_POST['btnagregar'])) {
    $nombres = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $email = trim($_POST['email']); // Eliminar espacios al principio y al final
    $password = $_POST['password'];
    $direccion = $_POST['direccion'];
    $sexo = $_POST['sexo'];
    $celular = $_POST['celular'];
    $fecha = $_POST['fecha_nac'];
    $estado = $_POST['estado'];
    $ciudad_id = $_POST['ciudad'];
    $user_id = $_POST['user'];

    // Verificar si el email ya existe en la base de datos
    $sql_check_email = "SELECT * FROM pacientes WHERE email = '$email'";
    $result = $conexion->query($sql_check_email);

    // Si el email ya está registrado
    if ($result->num_rows > 0) {
        // Si el correo existe, muestra un mensaje de error
        header('Location: index_admin.php?page=paciente_formulario.php');
        $_SESSION['message'] = "Este correo ya esta en uso";
        $_SESSION['color'] = "danger";
        //echo "Error: El correo electrónico '$email' ya está registrado.";
    } else {
        // Procesar la imagen
        $imagen = $_FILES['imagen']['name'];
        $file= $_FILES["imagen"];
          $nombreImg= $file["name"];
          $ruta_prov= $file["tmp_name"];
        $carpeta = "../paciente/nube/";
        //$target_file = $target_dir . basename($imagen);
        $src = $carpeta.$nombreImg;
            $imagen="../paciente/nube/".$nombreImg;
            move_uploaded_file($ruta_prov, $src);

        // Verifica si el directorio de destino existe, si no, lo crea
        /*if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }*/

        // Mover el archivo de la imagen
        //if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target_file)) {
            // Insertar el nuevo doctor
            $sql = "INSERT INTO pacientes (nombres, apellidos, email, password, imagen, direccion, sexo, celular, fecha_nac, estado, ciudad_id)
                    VALUES ('$nombres', '$apellido', '$email', '$password', '$imagen', '$direccion', '$sexo', '$celular', '$fecha', '$estado', '$ciudad_id')";

            if ($conexion->query($sql)) {
                $_SESSION['message'] = "Paciente Agregado con Éxito!";
                $_SESSION['color'] = "success";
                header('Location: ../admin/index_admin.php?page=../paciente/paciente_listado.php');
            } else {
                die("Error al insertar al paciente: " . mysqli_error($conexion));
            }

    }
}

  //  UPDATE
  if (isset($_POST['btneditar']))
  {
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $direccion = $_POST['direccion'];
        $sexo = $_POST['sexo'];
        $celular = $_POST['celular'];
        $fecha = $_POST['fecha_nac'];
        $estado = $_POST['estado'];
        $ciudad = $_POST['ciudad_id'];
        $status = $_POST['status'];

        $sql = "UPDATE pacientes SET nombres = '$nombres', apellidos = '$apellidos', email = '$email', password = '$password', direccion = '$direccion', 
        sexo = '$sexo', celular = '$celular', fecha_nac = '$fecha', estado = '$estado', ciudad_id = '$ciudad', status = '$status' 
        WHERE id = '$id'"; 
        
        //if (!mysqli_query($conexion, $sql)) {
            //die("Error al actualizar el doctor: " . mysqli_error($conexion));
        //}
        
        $conexion->query($sql);

        echo $sql;
        $_SESSION ['message'] = "Paciente Actualizado con Éxito!";
        $_SESSION ['color'] = "warning";
        header('location: ../admin/index_admin.php?page=../paciente/paciente_listado.php');
  }


  //Btn datos
  if (isset($_POST['btnDatos']))
  {
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $direccion = $_POST['direccion'];
        $sexo = $_POST['sexo'];
        $celular = $_POST['celular'];
        $fecha = $_POST['fecha_nac'];
        $estado = $_POST['estado'];
        $ciudad = $_POST['ciudad_id'];
        $status = $_POST['status'];

        $sql = "UPDATE pacientes SET nombres = '$nombres', apellidos = '$apellidos', email = '$email', password = '$password', direccion = '$direccion', 
        sexo = '$sexo', celular = '$celular', fecha_nac = '$fecha', estado = '$estado', ciudad_id = '$ciudad', status = '$status' 
        WHERE id = '$id'"; 
        
        //if (!mysqli_query($conexion, $sql)) {
            //die("Error al actualizar el doctor: " . mysqli_error($conexion));
        //}
        
        $conexion->query($sql);

        echo $sql;
        $_SESSION ['message'] = "Paciente Actualizado con Éxito!";
        $_SESSION ['color'] = "warning";
        header('location: ../paciente/index_paciente.php?page=../paciente/datos.php');
  }


  // ELIMINAR con $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT imagen FROM pacientes WHERE id=$id";
    $result = $conexion->query($sql);
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagen = $row['imagen'];
        
        // Elimina la imagen del servidor
        if (file_exists($imagen)) {
            unlink($imagen); // Elimina el archivo
        }
    }
    
    try {
        // Ejecuta la consulta de eliminación
        $sql = "DELETE FROM pacientes WHERE id=$id";
        $conexion->query($sql);
  
        // Si se eliminó con éxito
        $_SESSION ['message'] = "Paciente Eliminado con Éxito!";
        $_SESSION ['color'] = "danger";
    } catch (mysqli_sql_exception $e) {
        // Captura el error y almacénalo en la sesión
        $_SESSION['message'] = "Error al eliminar el paciente: " . htmlspecialchars($e->getMessage());
        $_SESSION['color'] = "danger";
    }

    header('location: ../admin/index_admin.php?page=../paciente/paciente_listado.php');
}

//   Registrar paciente
  if (isset($_POST['btnRegistrar'])) {
    $nombres = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $email = trim($_POST['email']); // Eliminar espacios al principio y al final
    $password = $_POST['password'];
    $direccion = $_POST['direccion'];
    $sexo = $_POST['sexo'];
    $celular = $_POST['celular'];
    $fecha = $_POST['fecha_nac'];
    $estado = $_POST['estado'];
    $ciudad_id = $_POST['ciudad'];
    //$user_id = $_POST['user'];

    // Verificar si el email ya existe en la base de datos
    $sql_check_email = "SELECT * FROM pacientes WHERE email = '$email'";
    $result = $conexion->query($sql_check_email);

    // Si el email ya está registrado
    if ($result->num_rows > 0) {
        // Si el correo existe, muestra un mensaje de error
        header('Location: ../paciente/index_paciente.php?page=paciente_formulario.php');
        $_SESSION['message'] = "Este correo ya esta en uso";
        $_SESSION['color'] = "danger";
        //echo "Error: El correo electrónico '$email' ya está registrado.";
    } else {
        // Procesar la imagen
        $imagen = $_FILES['imagen']['name'];
        $file= $_FILES["imagen"];
          $nombreImg= $file["name"];
          $ruta_prov= $file["tmp_name"];
        $carpeta = "../paciente/nube/";
        //$target_file = $target_dir . basename($imagen);
        $src = $carpeta.$nombreImg;
            $imagen="../paciente/nube/".$nombreImg;
            move_uploaded_file($ruta_prov, $src);

        // Verifica si el directorio de destino existe, si no, lo crea
        /*if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }*/

        // Mover el archivo de la imagen
        //if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target_file)) {
            // Insertar el nuevo doctor
            $sql = "INSERT INTO pacientes (nombres, apellidos, email, password, imagen, direccion, sexo, celular, fecha_nac, estado, ciudad_id)
                    VALUES ('$nombres', '$apellido', '$email', '$password', '$imagen', '$direccion', '$sexo', '$celular', '$fecha', '$estado', '$ciudad_id')";

            if ($conexion->query($sql)) {
                $_SESSION['message'] = "Paciente Agregado con Éxito!";
                $_SESSION['color'] = "success";
                header('Location: ../index.php?page=paciente/paciente.php');
            } else {
                die("Error al insertar al paciente: " . mysqli_error($conexion));
            }

    }
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