<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Procesados</title>
</head>
<body>

    <h2>Datos recibidos:</h2>

    <?php
    // Recibir datos del formulario
    $nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $ocupacion = $_POST['ocupacion'];
    $contacto = $_POST['contacto'];
    $nacionalidad = $_POST['nacionalidad'];
    $ingles = $_POST['ingles'];
    $lenguajes = isset($_POST['lenguajes']) ? implode(", ", $_POST['lenguajes']) : "No seleccionó ningún lenguaje";
    $aptitudes = $_POST['aptitudes'];
    $habilidades = isset($_POST['habilidades']) ? implode(", ", $_POST['habilidades']) : "No seleccionó ninguna habilidad";
    $perfil = $_POST['perfil'];

    // Mostrar los datos
    echo "<strong>Nombre y Apellidos:</strong> $nombre<br>";
    echo "<strong>Fecha de Nacimiento:</strong> $fecha_nacimiento<br>";
    echo "<strong>Ocupación:</strong> $ocupacion<br>";
    echo "<strong>Contacto:</strong> $contacto<br>";
    echo "<strong>Nacionalidad:</strong> $nacionalidad<br>";
    echo "<strong>Nivel de Inglés:</strong> $ingles<br>";
    echo "<strong>Lenguajes de Programación:</strong> $lenguajes<br>";
    echo "<strong>Aptitudes:</strong> $aptitudes<br>";
    echo "<strong>Habilidades:</strong> $habilidades<br>";
    echo "<strong>Perfil:</strong> $perfil<br>";
    ?>

</body>
</html>
