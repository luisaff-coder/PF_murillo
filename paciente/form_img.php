<link rel="stylesheet" href="../otros/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.css">
<?php 
include_once('../otros/conexion.php');

// Procesar la actualización de imagen
if (isset($_POST['btnactualizar'])) {
    $id = $_POST['id'];
    $imagen = $_FILES['imagen']['name'];
    $target_dir = "../paciente/nube/"; 
    $target_file = $target_dir . basename($imagen);

    // Crear la carpeta si no existe
    //if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);

    // Mover la imagen y actualizar la base de datos
    if (move_uploaded_file($_FILES['imagen']['tmp_name'], $target_file)) {
        $sql = "UPDATE pacientes SET imagen = '$target_file' WHERE id = $id";
        if ($conexion->query($sql) == TRUE) {
            header('Location: ../admin/index_admin.php?page=../paciente/paciente_listado.php');
        } else {
            die("Error al actualizar: " . $conexion->error);
        }
    } else {
        die("Error al subir la imagen.");
    }
}

// Obtener el vehículo por ID
$id = $_GET['id'] ?? null;
if ($id) {
    $stmt = $conexion->prepare("SELECT nombres, imagen FROM pacientes WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultado = $stmt->get_result()->fetch_assoc();
    if (!$resultado) die("Paciente no encontrado.");
} else {
    die("ID no proporcionado.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap-5.3/css/bootstrap.min.css">
    <title>Editar Imagen</title>
</head>
<body>
<div class="container mt-5">
    <h3>Editar Imagen de: <?php echo htmlspecialchars($resultado['nombres']); ?></h3>
    <form action="../paciente/form_img.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
        <div class="mb-3">
            <label class="form-label">Imagen Actual:</label><br>
            <img src="<?php echo htmlspecialchars($resultado['imagen']); ?>" alt="Imagen actual" style="width: 150px;">
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Nueva Imagen:</label>
            <input type="file" class="form-control" name="imagen" required>
        </div>
        <button type="submit" name="btnactualizar" class="btn btn-success">
            <i class="fa-solid fa-pen-to-square fa-2xl"></i> Actualizar Imagen
        </button>
    </form>
</div>
</body>
</html>
