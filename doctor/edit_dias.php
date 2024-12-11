
<link rel="stylesheet" href="../otros/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>

<style>
    .error {
        color: red;                      
    }
</style>

<?php
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    else
        die('termino');

    include_once('../otros/conexion.php');

    //Para la especialidad seleccionada
    $sql = "SELECT * FROM dias_trabaja WHERE id = $id";
    $result = $conexion->query($sql);
    
    if ($result->num_rows > 0) {
        $doctor_id = $_SESSION['sesionNombre'];
        $doctor = $result->fetch_assoc();
        $dia_seleccionado = $doctor['dia'];
    } else {
        echo "No se encontró el dia.";
        exit;
    }
    //Fin especialidad seleccionada


    //$sql="select * from dias_trabaja where id=$id";

    $datos = $conexion->query($sql);

    while ( $fila = mysqli_fetch_array($datos))
    {
        $dia = $fila['dia'];
        $inicia = $fila['horainicio'];
        $termina = $fila['horatermina'];
    }
?>
<link rel="stylesheet" href="../otros/public/bootstrap-5.3/css/bootstrap.min.css">
    <div class="card">
        <div class="card-header">
                <h3>Editar dias a laborar</h3>
        </div>
    <div class="card-body">
    <form action="../doctor/dias_crud.php" id="form2" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label >ID</label>
                    <input type="text" class="form-control" readonly name="id" value="<?php echo $id; ?>"  >
                </div>
                
                <div class="form-group">
                    <label >Doctor</label>
                    <input type="text" class="form-control" readonly name="doctor_id" value="<?php echo $doctor_id; ?>" >
                </div>
                <div class="form-group">
                    <label >Dia</label>
                    <select name="dia" class="form-control">
                        <option value=""></option>
                        <option value="Lunes" <?php if ($dia=="Lunes") echo "selected" ?>>Lunes</option>
                        <option value="Martes" <?php if ($dia=="Martes") echo "selected" ?>>Martes</option>
                        <option value="Miercoles" <?php if ($dia=="Miercoles") echo "selected" ?>>Miercoles</option>
                        <option value="Jueves" <?php if ($dia=="Jueves") echo "selected" ?>>Jueves</option>
                        <option value="Viernes" <?php if ($dia=="Viernes") echo "selected" ?>>Viernes</option>
                        <option value="Sabado" <?php if ($dia=="Sabado") echo "selected" ?>>Sabado</option>
                        <option value="Domingo" <?php if ($dia=="Domingo") echo "selected" ?>>Domingo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >Hora de inicio</label>
                    <input type="time" class="form-control" name="horainicio" value="<?php echo $inicia; ?>" placeholder="00:00:00">
                </div>
                <div class="form-group">
                    <label >Hora que termina</label>
                    <input type="time" class="form-control" name="horatermina" placeholder="00:00:00" value="<?php echo $termina; ?>" >
                </div>

                <br>
                <button type="submit" name="btneditar" class="btn btn-success">
                    <i class="fa-solid fa-user-doctor fa-2x"></i> Actualizar
                 </button>
            </form> 
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#form2').validate({
            rules: {
                dia: {
                    required: true
                },
                horainicio: {
                    required: true
                },
                horatermina: {
                    required: true
                }
            },
            messages: {
                dia: {
                    required: "Seleccione un die"
                },
                horainicio: {
                    required: "Seleccione una hora"
                },
                horatermina: {
                    required: "Seleccione una hora"
                }
            }
        });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>