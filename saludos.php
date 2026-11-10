
<?php
$idioma = "";
$saludo = "";

$saludos = array(
    "espanol" => "¡Hola! Bienvenido.",
    "ingles" => "Hello! Welcome.",
    "frances" => "Bonjour! Bienvenue.",
    "aleman" => "Hallo! Willkommen.",
    "italiano" => "Ciao! Benvenuto."
);

if (isset($_POST['idioma'])) {

    $idioma = $_POST['idioma'];

    if (isset($saludos[$idioma])) {
        $saludo = $saludos[$idioma];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="encabezado">
        <h1>Sistema de saludos</h1>
    </div>

    <div class="contenido">

        <h2>Saludos en diferentes idiomas</h2>

        <p class="descripcion">
            Selecciona un idioma para conocer su saludo.
        </p>

        <!-- Formulario para seleccionar el idioma -->
        <form method="POST">

            <label>Selecciona un idioma:</label>

            <select name="idioma" required>

                <option value="">Selecciona una opcion</option>

                <option value="espanol">Español</option>

                <option value="ingles">Inglés</option>

                <option value="frances">Francés</option>

                <option value="aleman">Alemán</option>

                <option value="italiano">Italiano</option>

            </select>

            <button type="submit">Mostrar saludo</button>

        </form>

        <p class="mensaje">
            <?php echo htmlspecialchars($saludo); ?>
        </p>

        <a href="index.php">Regresar a Bienvenida</a>

    </div>

</body>
</html>
