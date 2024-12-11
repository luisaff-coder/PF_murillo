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
        <h3>Registrar Clínica</h3>
    </div>
    <div class="card-body">
        <form action="../clinica/clinica_CRUD.php" id="clinicaForm" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label >Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Captura nombre" required>
            </div>
            <div class="form-group">
                <label >Direccion</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Captura dirección" required>
            </div>
            <div class="form-group">
                <label >Descripcion</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Captura descripción" required>
            </div>
            <div class="form-group">
                <label >Telefono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Captura telefóno" required>
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Captura email" required>
            </div>

            <br>
            <button type="submit" name="btnagregar" class="btn btn-success">
            <i class="fa-solid fa-hospital fa-2x"></i> Agregar
            </button>
        </form> 
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#clinicaForm').validate({
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

