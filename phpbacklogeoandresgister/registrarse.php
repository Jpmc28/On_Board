<?php
$servername = "bxj6zplqfg5ffqshgfhc-mysql.services.clever-cloud.com";
$username = "uxczixgtcqioyvqw";
$password = "hxGMRHGiSzMYFw08Bf1j";
$dbname = "bxj6zplqfg5ffqshgfhc";

//obteniendo datos
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

//verificar si existen
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "SELECT Contraseña FROM EstudiantesSena WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (!empty($row['Contraseña'])) {
            echo "El correo electrónico ya tiene una contraseña asignada.";
        } else {
            // Asignar la nueva contraseña
            $sql = "UPDATE EstudiantesSena SET Contraseña = ? WHERE CorreoInstitucional = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $password, $email);
            if ($stmt->execute()) {
                echo "Contraseña asignada exitosamente.";
        
            } else {
                echo "Error al asignar la contraseña.";
            }
        }
    } else {
        echo "El correo electrónico no existe en la base de datos.";
    }
    $stmt->close();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "SELECT Contraseña FROM EstudiantesKonradLorenz WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (!empty($row['Contraseña'])) {
            echo "El correo electrónico ya tiene una contraseña asignada.";
        } else {
            // Asignar la nueva contraseña
            $sql = "UPDATE EstudiantesKonradLorenz SET Contraseña = ? WHERE CorreoInstitucional = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $password, $email);
            if ($stmt->execute()) {
                echo "Contraseña asignada exitosamente.";
        
            } else {
                echo "Error al asignar la contraseña.";
            }
        }
    } else {
        echo "El correo electrónico no existe en la base de datos.";
    }
    $stmt->close();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $sql = "SELECT Contraseña FROM EstudiantesUninPahu WHERE CorreoInstitucional = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (!empty($row['Contraseña'])) {
            echo "El correo electrónico ya tiene una contraseña asignada.";
        } else {
            // Asignar la nueva contraseña
            $sql = "UPDATE EstudiantesUninPahu SET Contraseña = ? WHERE CorreoInstitucional = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $password, $email);
            if ($stmt->execute()) {
                echo "Contraseña asignada exitosamente.";
        
            } else {
                echo "Error al asignar la contraseña.";
            }
        }
    } else {
        echo "El correo electrónico no existe en la base de datos.";
    }
    $stmt->close();
}
$conn->close();
?>