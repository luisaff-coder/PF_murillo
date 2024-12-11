
<?php
session_start();
  include_once('../otros/conexion.php');

  //   CREATE
  if (isset($_POST['btnagregar'])) {

    $doctor = $_SESSION['sesionId'];
    $dia = $_POST['dia'];
    $inicio = $_POST['horainicio'];
    $termino = $_POST['horatermina'];
    //echo $doctor;
    //die();

    $sql = "INSERT INTO dias_trabaja (doctor_id, dia, horainicio, horatermina)
                    VALUES ('$doctor', '$dia', '$inicio', '$termino')";

    if ($conexion->query($sql)) {
        $_SESSION['message'] = "Dias Asignados con Éxito!";
        $_SESSION['color'] = "success";
            header('Location: ../doctor/index_doctor.php?page=../doctor/dias.php');
        } else {
            die("Error al insertar los dias: " . mysqli_error($conexion));
    }
}

  //  UPDATE
  if (isset($_POST['btneditar']))
  {
        $id = $_POST['id'];
        $dia = $_POST['dia'];
        $inicio = $_POST['horainicio'];
        $termino = $_POST['horatermina'];
        

        $sql = "UPDATE dias_trabaja SET dia = '$dia', horainicio = '$inicio', horatermina = '$termino' 
        WHERE id = '$id'"; 
        
        //if (!mysqli_query($conexion, $sql)) {
            //die("Error al actualizar el doctor: " . mysqli_error($conexion));
        //}
        
        $conexion->query($sql);

        echo $sql;
        $_SESSION ['message'] = "Doctor Actualizado con Éxito!";
        $_SESSION ['color'] = "warning";
        header('location: ../doctor/index_doctor.php?page=../doctor/dias.php');
  }


  // ELIMINAR con $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    

    // Luego, elimina el registro de la base de datos
    $sql = "DELETE FROM dias_trabaja WHERE id=$id";
    $conexion->query($sql);

    
    $_SESSION ['message'] = "Dia Eliminado con Éxito!";
    $_SESSION ['color'] = "danger";
    
    header('location: ../doctor/index_doctor.php?page=../doctor/dias.php');
}
  

?>