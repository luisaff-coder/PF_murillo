<?php
include_once('../otros/conexion.php');
include('../otros/errors.php');
//$sql = "select * from doctores order by id";


//$sql = "select doctores.*, especialidades.nombre nombreEspe
// from doctores inner join 
//especialidades on especialidad_id = especialidades.id;";


//$sql1 = "select doctores.*, ciudades.nombre nombreCiu from doctores inner join ciudades on ciudad_id = ciudades.id;";
//$sql2 = "select doctores.*, users.nombre nombreUser from doctores inner join users on user_id = users.id;";

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
    <br><a style="margin-left:20px"  class="btn btn-primary mt-1" href="index_admin.php?page=../doctor/doctor_formulario.php"><i class="fa-solid fa-user-doctor fa-2x"></i>  Agregar</a> <br> <br>
    <div class="card">
        <div class="card-header">
            <h3>Listado de Doctores</h3>
        </div>
        <div class="card-body">

            <table id='mytable' class="table table-hover">

                <thead>
                    <tr>
                    <th >Id</th>
                    <th >Nombre</th>
                    <th >Apellidos</th>
                    <th >Email</th>
                    <th >Foto</th>
                    <th >Especialidad</th>
                    <th >Ciudad</th>
                    <th >User</th>
                    <th >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ( $fila = mysqli_fetch_array($datos))
                    {
                    ?>
                        <tr>
                            <td> <?php echo $fila['id']; ?></td>
                            <td> <?php echo $fila['nombres']; ?> </td>
                            <td> <?php echo $fila['apellidos']; ?> </td>
                            <td> <?php echo $fila['email']; ?> </td>
                            <td>
                                <a href="index_admin.php?page=../doctor/form_img.php&id=<?php echo $fila['id']; ?> ">
                                    <img src="<?php echo $fila['imagen']; ?>" alt="Imagen del doctor" style="width: 100px; height: 100px;">
                                </a>
                            </td>
                            <td> <?php echo $fila['nombreEspe']; ?> </td>
                            <td> <?php echo $fila['nombreCiu']; ?> </td>
                            <td> <?php echo $fila['nombreUser']; ?> </td>
                            
                            

                            <td>
                            <a href="index_admin.php?page=../doctor/doctor_formulario2.php&id=<?php echo $fila['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="fa-solid fa-pen-to-square fa-2x"></i>  Editar</a>
                            
                            <a href="../doctor/doctor_CRUD.php?id=<?php echo $fila['id'];  ?>" onclick="return confirm('¿Estás Segur@ de Borrar?')" class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash-can fa-2x"></i>  Eliminar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    
    
    
    
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="../otros/table.js"></script>
