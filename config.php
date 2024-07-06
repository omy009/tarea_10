<?php
$servername = "localhost";
$username = "Tarea_10";
$password = "tarea10";
$database = "tarea_10";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}