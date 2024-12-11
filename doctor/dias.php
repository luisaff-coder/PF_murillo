<?php
include_once('../otros/conexion.php');
include('../otros/errors.php');
//$sql = "select * from doctores order by id";

      $sql = "
        SELECT dias_trabaja.*,  
            doctores.nombres AS nombreDoctor
        FROM dias_trabaja
        INNER JOIN doctores ON doctor_id = doctores.id where doctores.id = '".$_SESSION['sesionId']."'";


$datos = $conexion->query($sql);
?>
    <link rel="stylesheet" href="http://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
   

    <link rel="stylesheet" href="../otros/public/bootstrap-5.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../otros/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.css">
    <br><a style="margin-left:20px"  class="btn btn-primary mt-1" href="index_doctor.php?page=../doctor/agg_dias.php"><i class="fa-solid fa-user-doctor fa-2x"></i>  Agregar</a> <br> <br>
    <div class="card">
        <div class="card-header">
            <h3>Listado de Dias a laborar</h3>
        </div>
        <div class="card-body">

            <table id='mytable' class="table table-hover">

                <thead>
                    <tr>
                    <th >Id</th>
                    <th >Doctor</th>
                    <th >Dias</th>
                    <th >Hora inicia</th>
                    <th >Hora termina</th>
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
                            <td> <?php echo $fila['nombreDoctor']; ?> </td>
                            <td> <?php echo $fila['dia']; ?> </td>
                            <td> <?php echo $fila['horainicio']; ?> </td>
                            <td> <?php echo $fila['horatermina']; ?> </td>
                            
                            

                            <td>
                            <a href="index_doctor.php?page=../doctor/edit_dias.php&id=<?php echo $fila['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="fa-solid fa-pen-to-square fa-2x"></i>  Editar</a>
                            
                            <a href="../doctor/dias_crud.php?id=<?php echo $fila['id'];  ?>" onclick="return confirm('¿Estás Segur@ de Borrar?')" class="btn btn-danger btn-sm">
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
