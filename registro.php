<?php
include 'config.php';

// Obtener los datos del formulario
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Preparar la consulta SQL
$sql = "INSERT INTO usuario (name, email, password) VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>