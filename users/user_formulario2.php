
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


    $sql="select * from users where id=$id";

    $datos = $conexion->query($sql);

    while ( $fila = mysqli_fetch_array($datos))
    {
        $nombre = $fila['nombre'];
        $apellidos = $fila['apellidos'];
        $email = $fila['email'];
        $password = $fila['password'];
        $rol = $fila['rol'];
        $status = $fila['status'];
    }
?>
<link rel="stylesheet" href="../otros/public/bootstrap-5.3/css/bootstrap.min.css">
    <div class="card">
        <div class="card-header">
                <h3>Editar User</h3>
        </div>
        <div class="card-body">
            <form action="../users/user_CRUD.php" id="form2" method="post">
                <div class="form-group">
                    <label >ID</label>
                    <input type="text" class="form-control" readonly name="id" value="<?php echo $id; ?>"  >
                </div>
                <div class="form-group">
                    <label >Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>" placeholder="Captura nombre" >
                </div>
                <div class="form-group">
                    <label >Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" value="<?php echo $apellidos; ?>" placeholder="Captura apellidos" required >
                </div>
                <div class="form-group">
                    <label >Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Captura email" required >
                </div>
                <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" placeholder="Captura password" required>
                </div>
                <div class="form-group">
                    <label >Rol</label>
                    <input type="text" class="form-control" name="rol" value="<?php echo $rol; ?>" placeholder="Captura rol" required>
                </div>
                <div class="form-group">
                    <label >Status</label>
                    <input type="number" class="form-control" name="status" value="<?php echo $status; ?>" placeholder="Captura status" required>
                </div>

                <br>
                <button type="submit" name="btneditar" class="btn btn-success">
                    <i class="fa-solid fa-pen-to-square fa-2x"></i> Actualizar
                 </button>
            </form> 
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#form2').validate({
            rules: {
                nombre: {
                    required: true,
                    maxlength: 30
                }
                
            },
            messages: {
                nombre: {
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