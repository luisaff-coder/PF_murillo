
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
    $sql = "SELECT * FROM doctores WHERE id = $id";
    $result = $conexion->query($sql);
    
    if ($result->num_rows > 0) {
        $doctor = $result->fetch_assoc();
        $especialidad_seleccionada = $doctor['especialidad_id']; // Aquí guardas la especialidad seleccionada
        $user_seleccionado = $doctor['user_id'];
        $ciudad_seleccionada = $doctor['ciudad_id'];
    } else {
        echo "No se encontró la especialidad.";
        exit;
    }
    //Fin especialidad seleccionada


    $sql="select * from doctores where id=$id";

    $datos = $conexion->query($sql);

    while ( $fila = mysqli_fetch_array($datos))
    {
        $nombres = $fila['nombres'];
        $apellidos = $fila['apellidos'];
        $email = $fila['email'];
        $password = $fila['password'];
        $cedula = $fila['cedula'];
        $estado = $fila['estado'];
        $duracion_cita = $fila['duracion_cita'];
        $user = $fila['user_id'];
        $ciudad = $fila['ciudad_id'];
        $especialidad = $fila['especialidad_id'];
    }
?>
<link rel="stylesheet" href="../otros/public/bootstrap-5.3/css/bootstrap.min.css">
    <div class="card">
        <div class="card-header">
                <h3>Editar Doctor</h3>
        </div>
        <div class="card-body">
            <form action="../doctor/doctor_CRUD.php" id="form2" method="post">
                <div class="form-group">
                    <label >ID</label>
                    <input type="text" class="form-control" readonly name="id" value="<?php echo $id; ?>"  required>
                </div>
                <div class="form-group">
                    <label >Nombre</label>
                    <input type="text" class="form-control" name="nombres" value="<?php echo $nombres; ?>" placeholder="Captura nombre" required>
                </div>
                <div class="form-group">
                    <label >Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="<?php echo $apellidos; ?>" placeholder="Captura apellidos" required>
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Captura email" required>
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Captura la contraseña" required>
                </div>

                <div class="form-group">
                    <label >Especialidad</label>
                    <select name="especialidad_id" id="" class="form-control" required>
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

                                    $selected = ($id == $especialidad_seleccionada) ? "selected" : "";
                                    
                                    // Mostrar cada categoría como una opción en el select
                                    echo "<option value='$id' $selected>$nombre</option>";
                                    
                                }
                            } else {
                                // Mostrar cada especialidad como una opción en el select
                                echo "<option value='$'</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label >Cedula</label>
                    <input type="text" class="form-control" name="cedula" value="<?php echo $cedula; ?>" placeholder="Captura cedula" required>
                </div>
                <div class="form-group">
                    <label >Estado</label>
                    <input type="text" class="form-control" name="estado" value="<?php echo $estado; ?>" placeholder="Captura estado" required>
                </div>

                <div class="form-group">
                    <label >Ciudad</label>
                    <select name="ciudad_id" id="" class="form-control" required>
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

                                    $selected = ($id == $ciudad_seleccionada) ? "selected" : "";
                                    
                                    // Mostrar cada categoría como una opción en el select
                                    echo "<option value='$id' $selected>$nombre</option>";
                                    
                                }
                            } else {
                                // Si no hay ciudades disponibles, mostramos una opción vacía
                                echo "<option value='$'>No hay ciudades disponibles</option>";
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label >User</label>
                    <select name="user_id" id="" class="form-control" required>
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
                                    
                                    $selected = ($id == $user_seleccionado) ? "selected" : "";

                                    // Mostrar cada categoría como una opción en el select
                                    echo "<option value='$id' $selected>$nombre</option>";
                                    
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
                    <input type="text" class="form-control" name="duracion_cita" value="<?php echo $duracion_cita; ?>" placeholder="Captura duración" required>
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