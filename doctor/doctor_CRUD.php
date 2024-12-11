
<?php
session_start();
  include_once('../otros/conexion.php');
  //   CREATE
  if (isset($_POST['btnagregar'])) {
    $nombres = $_POST['nombres'];
    $apellido = $_POST['apellidos'];
    $email = trim($_POST['email']); // Eliminar espacios al principio y al final
    $password = $_POST['password'];
    $especialidad_id = $_POST['especialidad'];
    $cedula = $_POST['cedula'];
    $estado = $_POST['estado'];
    $ciudad_id = $_POST['ciudad'];
    $user_id = $_POST['user'];
    $duracion = $_POST['duracion'];

    // Verificar si el email ya existe en la base de datos
    $sql_check_email = "SELECT * FROM doctores WHERE email = '$email'";
    $result = $conexion->query($sql_check_email);

    // Si el email ya está registrado
    if ($result->num_rows > 0) {
        // Si el correo existe, muestra un mensaje de error
        header('Location: index_admin.php?page=doctor_formulario.php');
        $_SESSION['message'] = "Este correo ya esta en uso";
        $_SESSION['color'] = "danger";
        //echo "Error: El correo electrónico '$email' ya está registrado.";
    } else {
        // Procesar la imagen
        $imagen = $_FILES['imagen']['name'];
        $file= $_FILES["imagen"];
          $nombreImg= $file["name"];
          $ruta_prov= $file["tmp_name"];
        $carpeta = "../doctor/nube/";
        //$target_file = $target_dir . basename($imagen);
        $src = $carpeta.$nombreImg;
            $imagen="../doctor/nube/".$nombreImg;
            move_uploaded_file($ruta_prov, $src);

        // Verifica si el directorio de destino existe, si no, lo crea
        /*if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }*/

        // Mover el archivo de la imagen
        //if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target_file)) {
            // Insertar el nuevo doctor
            $sql = "INSERT INTO doctores (nombres, apellidos, email, password, imagen, especialidad_id, cedula, estado, ciudad_id, user_id, duracion_cita)
                    VALUES ('$nombres', '$apellido', '$email', '$password', '$imagen', '$especialidad_id', '$cedula', '$estado', '$ciudad_id', '$user_id', '$duracion')";

            if ($conexion->query($sql)) {
                $_SESSION['message'] = "Doctor Agregado con Éxito!";
                $_SESSION['color'] = "success";
                header('Location: ../admin/index_admin.php?page=../doctor/doctor_listado.php');
            } else {
                die("Error al insertar el doctor: " . mysqli_error($conexion));
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
        $cedula = $_POST['cedula'];
        $estado = $_POST['estado'];
        $duracion = $_POST['duracion_cita'];
        $user = $_POST['user_id'];
        $ciudad = $_POST['ciudad_id'];
        $especialidad = $_POST['especialidad_id'];
        

        $sql = "UPDATE doctores SET nombres = '$nombres', apellidos = '$apellidos', email = '$email', password = '$password', 
        especialidad_id = '$especialidad', cedula = '$cedula', estado = '$estado', ciudad_id = '$ciudad', user_id = '$user', duracion_cita = '$duracion' 
        WHERE id = '$id'"; 
        
        //if (!mysqli_query($conexion, $sql)) {
            //die("Error al actualizar el doctor: " . mysqli_error($conexion));
        //}
        
        $conexion->query($sql);

        echo $sql;
        $_SESSION ['message'] = "Doctor Actualizado con Éxito!";
        $_SESSION ['color'] = "warning";
        header('location: ../admin/index_admin.php?page=../doctor/doctor_listado.php');
  }


  // ELIMINAR con $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT imagen FROM doctores WHERE id=$id";
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
        $sql = "DELETE FROM doctores WHERE id=$id";
        $conexion->query($sql);
  
        // Si se eliminó con éxito
        $_SESSION ['message'] = "Doctor Eliminado con Éxito!";
        $_SESSION ['color'] = "danger";
    } catch (mysqli_sql_exception $e) {
        // Captura el error y almacénalo en la sesión
        $_SESSION['message'] = "Error al eliminar el doctor: " . htmlspecialchars($e->getMessage());
        $_SESSION['color'] = "danger";
    }
    header('location: ../admin/index_admin.php?page=../doctor/doctor_listado.php');
}


//  mis datos
  if (isset($_POST['btnDatos']))
  {
        $id = $_POST['id'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cedula = $_POST['cedula'];
        $estado = $_POST['estado'];
        $duracion = $_POST['duracion_cita'];
        $user = $_POST['user_id'];
        $ciudad = $_POST['ciudad_id'];
        $especialidad = $_POST['especialidad_id'];
        
        
        $sql = "UPDATE doctores SET nombres = '$nombres', apellidos = '$apellidos', email = '$email', password = '$password', 
        especialidad_id = '$especialidad', cedula = '$cedula', estado = '$estado', ciudad_id = '$ciudad', user_id = '$user', duracion_cita = '$duracion' 
        WHERE id = '$id'"; 
        
        //echo $especialidad;
        //die();
        //if (!mysqli_query($conexion, $sql)) {
            //die("Error al actualizar el doctor: " . mysqli_error($conexion));
        //}
        
        $conexion->query($sql);

        echo $sql;
        $_SESSION ['message'] = "Datos Actualizados con Éxito!";
        $_SESSION ['color'] = "warning";
        header('location: ../doctor/index_doctor.php?page=../doctor/datos.php');
  }
  

?>