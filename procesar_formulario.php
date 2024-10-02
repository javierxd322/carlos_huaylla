<?php
// Conectar a la base de datos MySQL
$conn = new mysqli("localhost", "root", "", "cv_database");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$ocupacion = $_POST['ocupacion'];
$contacto = $_POST['contacto'];
$nacionalidad = $_POST['nacionalidad'];
$ingles = $_POST['ingles'];
$lenguajes = isset($_POST['lenguajes']) ? implode(", ", $_POST['lenguajes']) : null;
$aptitudes = $_POST['aptitudes'];
$habilidades = isset($_POST['habilidades']) ? implode(", ", $_POST['habilidades']) : null;
$perfil = $_POST['perfil'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO cv_info (nombre, fecha_nacimiento, ocupacion, contacto, nacionalidad, ingles, lenguajes, aptitudes, habilidades, perfil)
        VALUES ('$nombre', '$fecha_nacimiento', '$ocupacion', '$contacto', '$nacionalidad', '$ingles', '$lenguajes', '$aptitudes', '$habilidades', '$perfil')";

if ($conn->query($sql) === TRUE) {
    echo "CV guardado correctamente en la base de datos.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
