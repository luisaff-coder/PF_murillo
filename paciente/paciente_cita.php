<?php
include_once('../otros/conexion.php');
    $email = $_SESSION['email'];
    $query = "Select * from pacientes where email = '".$email."'";
    $nr = $conexion->query($query);

    while ( $fila = mysqli_fetch_array($nr))
    {
        $id = $fila['id'];
        //Falta id del doctor
        //Fecha cita
        //Hora inicia
        //Hora termina
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduling</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./fullcalendar/lib/main.min.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./fullcalendar/lib/main.min.js"></script>
    <style>
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        body {
            height: 100%;
            width: 100%;
            font-family: Apple Chancery, cursive;
        }

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
        
    </style>
</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient" id="topNavBar">
        <div class="container">
            <a class="navbar-brand" href="https://sourcecodester.com">
            Sourcecodester
            </a>

            <div>
                <b class="text-light">Sample Scheduling</b>
            </div>
        </div>
    </nav>
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
        <div class="container-fluid">
            <form id="schedule-form">
                <?php
                    // Verificamos si 'nombre' está presente en la URL
                    $doctor_nombre = isset($_GET['nombre']) ? $_GET['nombre'] : ''; // Si no está, se asigna un valor vacío
                ?>
                <div class="form-group mb-2">
                    <label for="doctor_nombre" class="control-label">Doctor:</label>
                    <input type="text" class="form-control form-control-sm rounded-0" name="doctor_nombre" id="doctor_nombre" value="<?php echo htmlspecialchars($doctor_nombre); ?>" readonly required>
                </div>
                <div class="form-group mb-2">
                    <label for="fecha_cita" class="control-label">Fecha</label>
                    <input type="date" class="form-control form-control-sm rounded-0" name="fecha_cita" id="fecha_cita" required>
                </div>          
                <!-- Hora de la cita -->
                <div class="mt-3">
                    <label for="time_slot">Selecciona la hora:</label>
                    <div class="row row-cols-5 g-2" id="timeSlots">
                        <?php
                            $timeSlots = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'];
                            foreach ($timeSlots as $time) {
                                echo "<div class='col'>
                                <a href='#' class='btn btn-primary time-slot' data-time='{$time}' data-doctor='{$doctor_nombre}'>{$time}</a>
                                </div>";
                            }
                        ?>
                    </div>
                </div>
            </form>
    </div>
    


    <!-- Modal para seleccionar los datos de la cita -->
<div class="modal fade" id="citaModal" tabindex="-1" aria-labelledby="citaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="citaModalLabel">Detalles de la cita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de la cita -->
                <form id="citaForm">
                    <div class="form-group">
                        <label for="doctor_nombre">Doctor:</label>
                        <input type="text" class="form-control" id="doctor_nombre" name="doctor_nombre" readonly>
                    </div>
                    <div class="form-group">
                        <label for="hora_cita">Hora:</label>
                        <input type="text" class="form-control" id="hora_cita" name="hora_cita" readonly>
                    </div>
                    <div class="form-group">
                        <label for="fecha_cita">Fecha:</label>
                        <input type="date" class="form-control" id="fecha_cita" name="fecha_cita" required>
                    </div>
                    <div class="form-group">
                        <label for="comentarios">Comentarios:</label>
                        <textarea class="form-control" id="comentarios" name="comentarios"></textarea>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary">Confirmar cita</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br><br>
<div class="text-center">
    <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
    <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
</div>
               


<?php 
$schedules = $conexion->query("SELECT * FROM citas");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['fecha_cita']));
    $sched_res[$row['id']] = $row;
}
?>
<?php 
if(isset($conexion)) $conexion->close();
?>


</body>
<script>
    var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>
<script src="./js/script.js"></script>

</html>