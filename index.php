
<?php
// Obtenemos la fecha actual
$fecha = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <!-- Encabezado principal -->
    <div class="encabezado">
        <h1>Sistema de bienvenida</h1>
    </div>

    <!-- Contenido de la pagina -->
    <div class="contenido">

        <h2>¡Bienvenido!</h2>

        <!-- Logo de la escuela -->
        <img src="imagenes/logo.png" alt="Logo de CBTIS 217" class="imagen">

        <p class="descripcion">
            Te damos la bienvenida a esta actividad.
        </p>

        <!-- Datos del alumno y de la tarea -->
        <p><strong>Alumno:</strong> Santiago Reyes</p>

        <p><strong>Nombre de la tarea:</strong> Página de bienvenida y saludos</p>

        <p><strong>Escuela:</strong> CBTIS 217</p>

        <p><strong>Fecha:</strong> <?php echo $fecha; ?></p>

        <!-- Enlace para ir a la pagina de saludos -->
        <a href="saludos.php" class="boton">Ir a Saludos</a>

    </div>

</body>
</html>
