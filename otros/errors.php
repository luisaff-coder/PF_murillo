<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

    if(isset($_SESSION['message'])){

        $message = $_SESSION['message'];
        $color = $_SESSION['color'];
        

        echo "<div id='alert-message' class='alert alert-$color alert-dismissible fade show' role='alert'>
            <strong>$message</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";

        unset($_SESSION['message']);
        unset($_SESSION['color']);

    }

?>

<script>
    // Cierra la alerta automáticamente después de 5 segundos
    setTimeout(function() {
        var alert = document.getElementById('alert-message');
        if (alert) {
            var bsAlert = new bootstrap.Alert(alert);
            bsAlert.close();
        }
    }, 6000);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>