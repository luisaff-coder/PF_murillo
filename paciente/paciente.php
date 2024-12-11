<link rel="stylesheet" href="./otros/public/bootstrap-5.3/css/bootstrap.min.css">
<link rel="stylesheet" href="./otros/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.css">
<?php

//include_once('proyecto/otros/conexion.php');

//$sql = "select * from juegos order by Id";

if(isset($_SESSION['messageLogin'])){
        $message = $_SESSION['messageLogin'];
        $color = $_SESSION['color'];

        echo "<div class='alert alert-$color alert-dismissible fade show' role='alert'>
        <strong>$message</strong>
        <button type='button' class='btn-close' data-dismiss='alert' aria-label='Close'>
        </button>
        </div>";

        unset($_SESSION['messageLogin']);
}

?>

<link rel="stylesheet" href="../public/bootstrap-5.3/css/bootstrap.min.css">

    <div class="card" style="margin: 0 auto;">
        <div class="card-header">
        <br><br>
                <h3>Iniciar sesion como paciente</h3>
        </div>
        <div class="card-body" >
            <form id="Form" action="otros/CRUD.php" method="post" enctype="multipart/form-data">
                <div class="form-group"><br><br>
                    <label >Usuario</label>
                    <input id="user" type="text" class="form-control" name="email" placeholder="Ingrese el usuario">
                </div><br><br>
                <div class="form-group">
                    <label >Contraseña</label>
                    <input id="contra" type="password" class="form-control" name="contra" placeholder="Ingrese la contraseña">
                </div>
                <br>
                <div class="d-flex justify-content-center align-items-center gap-3 mt-3">
                    <button type="submit" name="loginPaciente" class="btn btn-success " value="LoginPaciente" style="font-size: 20px;"><img src="./iconos/guardar.png" width="50" height="50"> Iniciar sesion</button>
                    <br>
                    <a href="paciente/registrar_paciente.php" class="btn btn-warning btn-sm" style="font-size: 20px;">
                        <i class="fa-solid fa-right-to-bracket fa-2x"></i>Registrarse
                    </a>
                </div>
            </form>
        </div>
    </div>

    <style>
        label.error{
            color: red;
        }

        input.error, select, textarea{
            border: 2px solid red;
        }
    </style>

    <script src="https://code.jquery.com/jquery-3.7.1.js"> </script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.21.0/dist/jquery.validate.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/additional-methods.min.js"> </script>
    <script>
    $("#Form").validate({
        rules:{
            user:{
            required: true,
            minlength: 3,
            maxlength: 20
            },

            contra:{
            required: true,
            minlength: 3,
            maxlength: 20
            }
        },

        messages:{
            user:{
            required: "Por favor introduzca un usuario",
            minlength: "El titulo debe tener un minimo de 3",
            maxlength: "El titulo debe tener un maximo de 20"
            },

            contra:{
            required: "Introduzca una contraseña correcta",
            minlength: "Contraseña incorrecta",
            maxlength: "Contraseña incorrecta"
            }
        }
    }); 
    </script>
     <script src="https://code.jquery.com/jquery-3.7.1.js"> </script>