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

    $sql = "UPDATE EstudiantesKonradLorenz SET Nombres = ?, Telefono = ?, Direccion = ? WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssss", $nombre, $numero, $direccion, $email);
        
        if ($stmt->execute()) {
            echo "Datos actualizados exitosamente.";
        } else {
            echo "Error al actualizar los datos: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
    $sql = "UPDATE EstudiantesUninPahu SET Nombres = ?, Telefono = ?, Direccion = ? WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssss", $nombre, $numero, $direccion, $email);
        
        if ($stmt->execute()) {
            echo "Datos actualizados exitosamente.";
        } else {
            echo "Error al actualizar los datos: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
    $sql = "UPDATE EstudiantesSena SET Nombres = ?, Telefono = ?, Direccion = ? WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssss", $nombre, $numero, $direccion, $email);
        
        if ($stmt->execute()) {
            echo "Datos actualizados exitosamente.";
        } else {
            echo "Error al actualizar los datos: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
    $sql = "UPDATE ProfesSena SET Nombres = ?, Telefono = ?, Direccion = ? WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssss", $nombre, $numero, $direccion, $email);
        
        if ($stmt->execute()) {
            echo "Datos actualizados exitosamente.";
        } else {
            echo "Error al actualizar los datos: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
    $sql = "UPDATE ProfesUninPahu SET Nombres = ?, Telefono = ?, Direccion = ? WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssss", $nombre, $numero, $direccion, $email);
        
        if ($stmt->execute()) {
            echo "Datos actualizados exitosamente.";
        } else {
            echo "Error al actualizar los datos: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
    }
    $sql = "UPDATE ProfesKonradLorenz SET Nombres = ?, Telefono = ?, Direccion = ? WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssss", $nombre, $numero, $direccion, $email);

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
