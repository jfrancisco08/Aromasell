<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "aromasell"; 

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['dirección'];
$lugar = $_POST['celular'];

$sql = "INSERT INTO registro (nombre, apellido, dirección, celular) VALUES ('$nombre', '$apellido', '$dirección', '$celular')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
        exit();
} else {
    echo "Error al registrar los datos: " . $conn->error;
}

$conn->close();
?>
