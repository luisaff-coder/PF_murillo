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
        <h3>Registrar Doctores</h3>
    </div>
    <div class="card-body">
    <form action="../doctor/doctor_CRUD.php" id="form2" method="post" enctype="multipart/form-data">
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
                    <label >Especialidad</label>
                    <select name="especialidad" id="" class="form-control">
                        <?php
            
                            include_once('../otros/conexion.php');
                            $sql = "SELECT id, nombre FROM especialidades"; 
                            $result = $conexion->query($sql);

                            // Verifica si la consulta tiene resultados
                            if ($result->num_rows > 0) {
                                // Obtener todos los resultados como un arreglo
                                $especialidades = $result->fetch_all(MYSQLI_ASSOC);
                                
                                // Recorrer los resultados con un foreach
                                foreach ($especialidades as $especialidad) {
                                    $id = $especialidad['id'];
                                    $nombre = $especialidad['nombre'];
                                    
                                    // Mostrar cada categoría como una opción en el select
                                    echo "<option value='$id'>$nombre</option>";
                                    
                                }
                            } else {
                                // Si no hay especialidades disponibles, mostramos una opción vacía
                                echo "<option value=''>No hay especialidades disponibles</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label >Cedula</label>
                    <input type="text" class="form-control" name="cedula"placeholder="Captura cedula" >
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
                <div class="form-group">
                    <label >User</label>
                    <select name="user" id="" class="form-control">
                        <?php
            
                            include_once('../otros/conexion.php');
                            $sql = "SELECT id, nombre FROM users"; 
                            $result = $conexion->query($sql);

                            // Verifica si la consulta tiene resultados
                            if ($result->num_rows > 0) {
                                // Obtener todos los resultados como un arreglo
                                $users = $result->fetch_all(MYSQLI_ASSOC);
                                
                                // Recorrer los resultados con un foreach
                                foreach ($users as $user) {
                                    $id = $user['id'];
                                    $nombre = $user['nombre'];
                                    
                                    // Mostrar cada categoría como una opción en el select
                                    echo "<option value='$id'>$nombre</option>";
                                    
                                }
                            } else {
                                // Si no hay usuarios disponibles, mostramos una opción vacía
                                echo "<option value=''>No hay usuarios disponibles</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label >Duración cita</label>
                    <input type="number" class="form-control" name="duracion" placeholder="Captura duración" >
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
                nombres: {
                    required: true,
                    maxlength: 30,
                    minlength: 3
                },
                email: {
                    required: true,
                    maxlength: 30,
                    minlength: 3
                },
                password: {
                    required: true,
                    maxlength: 30,
                    minlength: 3
                }
            },
            messages: {
                nombres: {
                    required: "Por favor, introduce el nombre",
                    maxlength: "Este campo no puede tener más de 30 caracteres",
                    minlength: "Este campo no puede tener menos de 3 caracteres"
                },
                email: {
                    required: "Este campo no puede estar vacio",
                    maxlength: "Este campo no puede tener más de 30 caracteres",
                    minlength: "Este campo no puede tener menos de 3 caracteres"
                },
                password: {
                    required: "Este campo no puede estar vacio",
                    maxlength: "Este campo no puede tener más de 30 caracteres",
                    minlength: "Este campo no puede tener menos de 3 caracteres"
                }
            }
        });
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>
