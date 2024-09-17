<?php
$servername = "bxj6zplqfg5ffqshgfhc-mysql.services.clever-cloud.com";
$username = "uxczixgtcqioyvqw";
$password = "hxGMRHGiSzMYFw08Bf1j";
$dbname = "bxj6zplqfg5ffqshgfhc";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $numero = $_POST['numero'];
    $direccion = $_POST['direccion'];

    // Sentencia SQL corregida (separar los campos con comas)
    $sql = "UPDATE EstudiantesKonradLorenz SET Nombres = ?, Telefono = ?, Direccion = ? WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        // Vinculando los parámetros
        $stmt->bind_param("ssss", $nombre, $numero, $direccion, $email);
        
        // Ejecutando la consulta
        if ($stmt->execute()) {
            echo "Datos actualizados exitosamente.";
        } else {
            echo "Error al actualizar los datos: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
}

$conn->close();
