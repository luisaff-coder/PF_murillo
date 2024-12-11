<?php
include('../otros/errors.php');

$doctor_id = $_SESSION['sesionNombre'];
?>

<!--vehiculo_formulario.php-->
<link rel="stylesheet" href="../otros/public/bootstrap-5.3/css/bootstrap.min.css">
<link rel="stylesheet" href="../otros/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.css">


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>

<style>
    .error {
        color: red;                       
    }
</style>
<!--
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
-->
<div class="card">
    <div class="card-header">
        <h3>Agregar dia de trabajo</h3>
    </div>
    <div class="card-body">
    <form action="../doctor/dias_crud.php" id="form2" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Doctor</label>
                    <input type="text" class="form-control" readonly name="doctor_id" value="<?php echo $doctor_id; ?>" >
                </div>
                <div class="form-group">
                    <label >Dia</label>
                    <select name="dia" class="form-control">
                        <option value=""></option>
                        <option value="Lunes">Lunes</option>
                        <option value="Martes">Martes</option>
                        <option value="Miercoles">Miercoles</option>
                        <option value="Jueves">Jueves</option>
                        <option value="Viernes">Viernes</option>
                        <option value="Sabado">Sabado</option>
                        <option value="Domingo">Domingo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >Hora de inicio</label>
                    <input type="time" class="form-control" name="horainicio" placeholder="00:00:00" >
                </div>
                <div class="form-group">
                    <label >Hora que termina</label>
                    <input type="time" class="form-control" name="horatermina" placeholder="00:00:00" >
                </div>

                <br>
                <button type="submit" name="btnagregar" class="btn btn-success">
                    <i class="fa-solid fa-user-doctor fa-2x"></i> Agregar
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
                    required: "Seleccione un dia"
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

