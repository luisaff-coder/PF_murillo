<link rel="stylesheet" href="../otros/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>

<style>
    .error {
        color: red;                      
    }
</style>

<?php
    include_once('../otros/conexion.php');
    include('../otros/errors.php');

    //Quite el sesion email porque cuando cambias el email te marca error
    $id = $_SESSION['sesionId'];
    
    $query = "SELECT * FROM doctores WHERE id = '$id'";
    $nr = $conexion->query($query);

    while ( $fila = mysqli_fetch_array($nr))
    {
        $id = $fila['id'];
        $nombres = $fila['nombres'];
        $apellidos = $fila['apellidos'];
        $email = $fila['email'];
        $imagen = $fila['imagen'];
        $password = $fila['password'];
        $cedula = $fila['cedula'];
        $estado = $fila['estado'];
        $duracion_cita = $fila['duracion_cita'];

    }

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



$sql = "
SELECT doctores.*, 
       especialidades.nombre AS nombreEspe, 
       ciudades.nombre AS nombreCiu, 
       users.nombre AS nombreUser
FROM doctores
INNER JOIN especialidades ON especialidad_id = especialidades.id
INNER JOIN ciudades ON ciudad_id = ciudades.id
INNER JOIN users ON user_id = users.id";


$datos = $conexion->query($sql);
?>
    <link rel="stylesheet" href="http://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
   

    <link rel="stylesheet" href="../otros/public/bootstrap-5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../otros/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.css">
        <div class="card">
        <div class="card-header">
                <h3>Mis Datos</h3>
        </div>
        <div class="card-body">
            <form action="../doctor/doctor_CRUD.php" id="form2" method="post">
                <div class="form-group">
                    <label >ID</label>
                    <input type="text" class="form-control" readonly name="id" value="<?php echo $id; ?>"  >
                </div>
                <div class="form-group">
                    <label >Nombre</label>
                    <input type="text" class="form-control" name="nombres" value="<?php echo $nombres; ?>" placeholder="Captura nombre" >
                </div>
                <div class="form-group">
                    <label >Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="<?php echo $apellidos; ?>" placeholder="Captura apellidos" >
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Captura email" >
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Captura la contraseña" >
                </div>

                <div class="form-group">
                    <label >Especialidad</label>
                    <select  id="" class="form-control" name="especialidad_id">
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
                                    $idEsp = $especialidad['id'];
                                    $nombre = $especialidad['nombre'];

                                    $selectedEsp = ($idEsp == $especialidad_seleccionada) ? "selected" : '';
                                    
                                    // Mostrar cada categoría como una opción en el select
                                    echo "<option value='$idEsp' $selectedEsp>$nombre</option>";
                                    
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
                    <input type="text" class="form-control" name="cedula" value="<?php echo $cedula; ?>" placeholder="Captura cedula" >
                </div>
                <div class="form-group">
                    <label >Estado</label>
                    <input type="text" class="form-control" name="estado" value="<?php echo $estado; ?>" placeholder="Captura estado" >
                </div>

                <div class="form-group">
                    <label >Ciudad</label>
                    <select name="ciudad_id" id="" class="form-control">
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
                                    $idCi = $ciudad['id'];
                                    $nombre = $ciudad['nombre'];

                                    $selected = ($idCi == $ciudad_seleccionada) ? "selected" : "";
                                    
                                    // Mostrar cada categoría como una opción en el select
                                    echo "<option value='$idCi' $selected>$nombre</option>";
                                    
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
                    <select name="user_id" id="" class="form-control">
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
                                    $idUser = $user['id'];
                                    $nombre = $user['nombre'];
                                    
                                    $selected = ($idUser == $user_seleccionado) ? "selected" : "";

                                    // Mostrar cada categoría como una opción en el select
                                    echo "<option value='$idUser' $selected>$nombre</option>";
                                    
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
                    <input type="varchar" class="form-control" name="duracion_cita" value="<?php echo $duracion_cita; ?>" placeholder="Captura duración" >
                </div> <br>

                <a href="index_doctor.php?page=../doctor/form_img2.php&id=<?php echo $id; ?> ">
                                    <img src="<?php echo $imagen; ?>" alt="Imagen del doctor" style="width: 100px; height: 100px;">
                                </a>

                <br> <br>
                <button type="submit" name="btnDatos" class="btn btn-success">
                    <i class="fa-solid fa-user-doctor fa-2x"></i> Actualizar
                 </button>
                  <br>
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
                apellidos: {
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
                },
                cedula: {
                    required: true,
                    maxlength: 30,
                    minlength: 3
                },
                estado: {
                    required: true,
                    maxlength: 30,
                    minlength: 3
                },

                
            },
            messages: {
                nombres: {
                    required: "Por favor, introduce el nombre",
                    maxlength: "El nombre no puede tener más de 30 caracteres",
                    minlength: "El nombre no puede tener menos de 3 caracteres"
                },
                apellidos: {
                    required: "Este campo no puede estar vacio",
                    maxlength: "El apellido no puede tener más de 30 caracteres",
                    minlength: "El apellido no puede tener menos de 3 caracteres"
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
                },
                cedula: {
                    required: "Este campo no puede estar vacio",
                    maxlength: "Este campo no puede tener más de 30 caracteres",
                    minlength: "Este campo no puede tener menos de 3 caracteres"
                },
                estado: {
                    required: "Este campo no puede estar vacio",
                    maxlength: "Este campo no puede tener más de 30 caracteres",
                    minlength: "Este campo no puede tener menos de 3 caracteres"
                }
            }
        });
});
</script>
    
    
    
    
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="../otros/table.js"></script>
