<?php
include('../otros/errors.php');
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
        <h3>Registrate como Paciente</h3>
    </div>
    <div class="card-body">
    <form action="../paciente/paciente_CRUD.php" id="form2" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Nombre</label>
                    <input type="text" class="form-control" name="nombres" placeholder="Captura nombre" >
                </div>
                <div class="form-group">
                    <label >Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" placeholder="Captura apellidos" >
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Captura email" >
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Captura la contraseña" >
                </div>
                <div class="form-group">
                    <label >Imagen:</label>
                    <!--
                    <label for="imagen" class="col-form-label">Imagen:</label>
                    -->
                    <input type="file" class="form-control" id="imagen" name="imagen" required>
                </div>
                
                <div class="form-group">
                    <label >Direccion</label>
                    <input type="text" class="form-control" name="direccion"placeholder="Captura direccion" >
                </div>
                <div class="form-group">
                    <label >Sexo</label>
                    <select name="sexo" class="form-control">
                        <option value=""></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otros">Otros</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >Celular</label>
                    <input type="text" class="form-control" name="celular"placeholder="Captura celular" >
                </div>
                <div class="form-group">
                    <label >fecha_nac</label>
                    <input type="date" class="form-control" name="fecha_nac"placeholder="Captura fecha" >
                </div>
                <div class="form-group">
                    <label >Estado</label>
                    <input type="text" class="form-control" name="estado" placeholder="Captura estado" >
                </div>
                <div class="form-group">
                    <label >Ciudad</label>
                    <select name="ciudad" id="" class="form-control">
                        <?php
            
                            include_once('../otros/conexion.php');
                            $sql = "SELECT id, nombre FROM ciudades"; 
                            $result = $conexion->query($sql);

                            // Verifica si la consulta tiene resultados
                            if ($result->num_rows > 0) {
                                // Obtener todos los resultados como un arreglo
                                $ciudades = $result->fetch_all(MYSQLI_ASSOC);
                                
                                // Recorrer los resultados con un foreach
                                foreach ($ciudades as $ciudad) {
                                    $id = $ciudad['id'];
                                    $nombre = $ciudad['nombre'];
                                    
                                    // Mostrar cada categoría como una opción en el select
                                    echo "<option value='$id'>$nombre</option>";
                                    
                                }
                            } else {
                                // Si no hay ciudades disponibles, mostramos una opción vacía
                                echo "<option value=''>No hay ciudades disponibles</option>";
                            }
                        ?>
                    </select>
                </div>

                <br>
                <button type="submit" name="btnRegistrar" class="btn btn-success">
                    <i class="fa-solid fa-restroom fa-2x"></i> Registrar
                 </button>
            </form> 
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#form2').validate({
            rules: {
                nombres: {
                    required: true,
                    maxlength: 30
                }
            },
            messages: {
                nombres: {
                    required: "Por favor, introduce el nombre",
                    maxlength: "El nombre no puede tener más de 30 caracteres"
                }
            }
        });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>

