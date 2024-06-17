<?php
$servidor = "localhost";
$usuario = "tecnologo";
$contrasenia = "";
$database = "CURE";

$ci = $_POST['ci'];

$conexion = mysqli_connect($servidor, $usuario, $contrasenia, $database);

$consulta = "SELECT * FROM estudiante WHERE ci = '$ci'";

$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmación</title>
    </head>

    <body>
        <a>El usuario con ci: <?php echo $ci ?> ya existe</a>
        <a href="../index.html">Volver</a>
    </body>

    </html>
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Alta Usuario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>

        <form action="../Persistencia/altaUsuario.php" method="POST">
            <div class="mb-3">
                <label for="ci" class="form-label">Cédula de Identidad</label>
                <input type="text" name="ci" id="ci" value="<?php echo htmlspecialchars($ci); ?>" readonly>
                <div class="invalid-feedback">Este campo es requerido</div>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
                <div class="invalid-feedback">Este campo es requerido</div>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
                <div class="invalid-feedback">Este campo es requerido</div>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
                <div class="invalid-feedback">Este campo es requerido</div>
            </div>
            <div id="successMessageModificar" class="mb-3 d-none text-success">¡Estudiante ingresado
                exitosamente!</div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>

    </body>

    </html>
<?php
}

mysqli_close($conexion);
?>
