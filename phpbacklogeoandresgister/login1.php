<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

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

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $psw = $_POST['password'];

    $sql = "SELECT * FROM EstudiantesSena JOIN CarrerasSena ON CarreraId = idCarreras JOIN ClasesSena ON ClasesId = idClase WHERE CorreoInstitucional = ? AND Contraseña = ?;";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("ss", $email, $psw);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION["NumeroDeSemestre"] = ($user["SemestreId"]);
            // Verificar el valor de SemestreId y modificarlo si es necesario
            if ($user["SemestreId"] == "101" || $user["SemestreId"] == "201" || $user["SemestreId"] == "301" || $user["SemestreId"] == "401" || $user["SemestreId"] == "501" || $user["SemestreId"] == "601") {
                $_SESSION["NumeroDeSemestre"] = 20;
                }
                else if ($user["SemestreId"] == "102" || $user["SemestreId"] == "202" || $user["SemestreId"] == "302" || $user["SemestreId"] == "402" || $user["SemestreId"] == "502" || $user["SemestreId"] == "602"){
                $_SESSION["NumeroDeSemestre"] = 40;
                }
                else if ($user["SemestreId"] == "103" || $user["SemestreId"] == "203" || $user["SemestreId"] == "303" || $user["SemestreId"] == "403" || $user["SemestreId"] == "503" || $user["SemestreId"] == "603"){
                $_SESSION["NumeroDeSemestre"] = 60;
                }
                else if ($user["SemestreId"] == "104" || $user["SemestreId"] == "204" || $user["SemestreId"] == "304" || $user["SemestreId"] == "404" || $user["SemestreId"] == "504" || $user["SemestreId"] == "604"){
                $_SESSION["NumeroDeSemestre"] = 80;
                }
                else {
                $_SESSION["NumeroDeSemestre"] = 100;
                }
        $_SESSION['id_Estudiante'] = $user['idEstudiante'];
        $_SESSION['nombre'] = $user['Nombres'];
        $_SESSION['CorreoInstitucional'] = $user['CorreoInstitucional'];
        $_SESSION['Telefono'] = $user['Telefono'];
        $_SESSION['Direccion'] = $user['Direccion'];
        $_SESSION['NombreCarrera'] = $user['NombreCarreras'];
        $_SESSION['NombreClase'] = $user['NombreClase'];
        header("Location: ../entradalogeo/home.php"); 
        exit();
    } else {
        header("Location: ../index.php");
        echo '<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>';
    }

//KONRAD LORENZ
$sql2 = "SELECT *, ck1.NombreClase AS NombreClase1, ck2.NombreClase AS NombreClase2, NombreCarreras, ek.SemestreId FROM EstudiantesKonradLorenz ek JOIN CarrerasKonradLorenz ON ek.CarreraId = CarrerasKonradLorenz.idCarreras JOIN ClasesKonradLorenz ck1 ON ek.ClasesId = ck1.idClase LEFT JOIN ClasesKonradLorenz ck2 ON ek.ClasesId2 = ck2.idClase  WHERE ek.CorreoInstitucional = ? AND ek.Contraseña = ?;";
$stmt = $conn->prepare($sql2);

    if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conn->error);
    }

    $stmt->bind_param("ss", $email, $psw);
    $stmt->execute();
    $result2 = $stmt->get_result();

    if ($result2->num_rows > 0) {
    $user = $result2->fetch_assoc();

    // Asignar el valor del semestre a la sesión
        $_SESSION["NumeroDeSemestre"] = $user["SemestreId"];
            // Verificar el valor de SemestreId y modificarlo si es necesario
        if ($user["SemestreId"] == "101" || $user["SemestreId"] == "201" || $user["SemestreId"] == "301" || $user["SemestreId"] == "401" || $user["SemestreId"] == "501" || $user["SemestreId"] == "601") {
            $_SESSION["NumeroDeSemestre"] = 10;
            }
            else if ($user["SemestreId"] == "102" || $user["SemestreId"] == "202" || $user["SemestreId"] == "302" || $user["SemestreId"] == "402" || $user["SemestreId"] == "502" || $user["SemestreId"] == "602") {
            $_SESSION["NumeroDeSemestre"] = 20;
            }
            else if ($user["SemestreId"] == "103" || $user["SemestreId"] == "203" || $user["SemestreId"] == "303" || $user["SemestreId"] == "403" || $user["SemestreId"] == "503" || $user["SemestreId"] == "603"){
            $_SESSION["NumeroDeSemestre"] = 30;
            }
            else if ($user["SemestreId"] == "104" || $user["SemestreId"] == "204" || $user["SemestreId"] == "304" || $user["SemestreId"] == "404" || $user["SemestreId"] == "504" || $user["SemestreId"] == "604"){
            $_SESSION["NumeroDeSemestre"] = 40;
            }
            else if ($user["SemestreId"] == "105" || $user["SemestreId"] == "205" || $user["SemestreId"] == "305" || $user["SemestreId"] == "405" || $user["SemestreId"] == "505" || $user["SemestreId"] == "605"){
            $_SESSION["NumeroDeSemestre"] = 50;
            }
            else if ($user["SemestreId"] == "106" || $user["SemestreId"] == "206" || $user["SemestreId"] == "306" || $user["SemestreId"] == "406" || $user["SemestreId"] == "506" || $user["SemestreId"] == "606"){
            $_SESSION["NumeroDeSemestre"] = 60;
            }
            else if ($user["SemestreId"] == "107" || $user["SemestreId"] == "207" || $user["SemestreId"] == "307" || $user["SemestreId"] == "407" || $user["SemestreId"] == "507" || $user["SemestreId"] == "607"){
            $_SESSION["NumeroDeSemestre"] = 70;
            }
            else if ($user["SemestreId"] == "108" || $user["SemestreId"] == "208" || $user["SemestreId"] == "308" || $user["SemestreId"] == "408" || $user["SemestreId"] == "508" || $user["SemestreId"] == "608"){
            $_SESSION["NumeroDeSemestre"] = 80;
            }
            else if ($user["SemestreId"] == "109" || $user["SemestreId"] == "209" || $user["SemestreId"] == "309" || $user["SemestreId"] == "409" || $user["SemestreId"] == "509" || $user["SemestreId"] == "609"){
            $_SESSION["NumeroDeSemestre"] = 90;
            }
            else {
            $_SESSION["NumeroDeSemestre"] = 100;
            }
        $_SESSION['id_Estudiante'] = $user['idEstudiante'];
        $_SESSION['nombre'] = $user['Nombres'];
        $_SESSION['CorreoInstitucional'] = $user['CorreoInstitucional'];
        $_SESSION['Telefono'] = $user['Telefono'];
        $_SESSION['Direccion'] = $user['Direccion'];
        $_SESSION['NombreCarrera'] = $user['NombreCarreras'];
        $_SESSION['NombreClase'] = $user['NombreClase1'];
        $_SESSION['NombreClase2'] = $user['NombreClase2'];

        header("Location: ../entradalogeo/home.php"); 
        exit();
    } else {
        header("Location: ../index.php");
        echo '<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>';
    }
    
//UninPahu
$sql3 = "SELECT *, cu1.NombreClase AS NombreClase1, cu2.NombreClase AS NombreClase2, NombreCarreras, eu.SemestreId FROM EstudiantesUninPahu eu JOIN CarrerasUninPahu ON eu.CarreraId = CarrerasUninPahu.idCarreras JOIN ClasesUninPahu cu1 ON eu.ClasesId = cu1.idClase LEFT JOIN ClasesUninPahu cu2 ON eu.ClasesId2 = cu2.idClase  WHERE eu.CorreoInstitucional = ? AND eu.Contraseña = ?;";
$stmt = $conn->prepare($sql3);
$stmt->bind_param("ss", $email, $psw);
    $stmt->execute();
    $result3 = $stmt->get_result();

    if ($result3->num_rows > 0) {
        $user = $result3->fetch_assoc();

            // Asignar el valor del semestre a la sesión
            $_SESSION["NumeroDeSemestre"] = ($user["SemestreId"]);
            // Verificar el valor de SemestreId y modificarlo si es necesario
        if ($user["SemestreId"] == "101" || $user["SemestreId"] == "201" || $user["SemestreId"] == "301" || $user["SemestreId"] == "401" || $user["SemestreId"] == "501" || $user["SemestreId"] == "601") {
            $_SESSION["NumeroDeSemestre"] = 10;
            }
            else if ($user["SemestreId"] == "102" || $user["SemestreId"] == "202" || $user["SemestreId"] == "302" || $user["SemestreId"] == "402" || $user["SemestreId"] == "502" || $user["SemestreId"] == "602"){
            $_SESSION["NumeroDeSemestre"] = 20;
            }
            else if ($user["SemestreId"] == "103" || $user["SemestreId"] == "203" || $user["SemestreId"] == "303" || $user["SemestreId"] == "403" || $user["SemestreId"] == "503" || $user["SemestreId"] == "603"){
            $_SESSION["NumeroDeSemestre"] = 30;
            }
            else if ($user["SemestreId"] == "104" || $user["SemestreId"] == "204" || $user["SemestreId"] == "304" || $user["SemestreId"] == "404" || $user["SemestreId"] == "504" || $user["SemestreId"] == "604"){
            $_SESSION["NumeroDeSemestre"] = 40;
            }
            else if ($user["SemestreId"] == "105" || $user["SemestreId"] == "205" || $user["SemestreId"] == "305" || $user["SemestreId"] == "405" || $user["SemestreId"] == "505" || $user["SemestreId"] == "605"){
            $_SESSION["NumeroDeSemestre"] = 50;
            }
            else if ($user["SemestreId"] == "106" || $user["SemestreId"] == "206" || $user["SemestreId"] == "306" || $user["SemestreId"] == "406" || $user["SemestreId"] == "506" || $user["SemestreId"] == "606"){
            $_SESSION["NumeroDeSemestre"] = 60;
            }
            else if ($user["SemestreId"] == "107" || $user["SemestreId"] == "207" || $user["SemestreId"] == "307" || $user["SemestreId"] == "407" || $user["SemestreId"] == "507" || $user["SemestreId"] == "607"){
            $_SESSION["NumeroDeSemestre"] = 70;
            }
            else if ($user["SemestreId"] == "108" || $user["SemestreId"] == "208" || $user["SemestreId"] == "308" || $user["SemestreId"] == "408" || $user["SemestreId"] == "508" || $user["SemestreId"] == "608"){
            $_SESSION["NumeroDeSemestre"] = 80;
            }
            else if ($user["SemestreId"] == "109" || $user["SemestreId"] == "209" || $user["SemestreId"] == "309" || $user["SemestreId"] == "409" || $user["SemestreId"] == "509" || $user["SemestreId"] == "609"){
            $_SESSION["NumeroDeSemestre"] = 90;
            }
            else {
            $_SESSION["NumeroDeSemestre"] = 100;
            }
        $_SESSION['id_Estudiante'] = $user['idEstudiante'];
        $_SESSION['nombre'] = $user['Nombres'];
        $_SESSION['CorreoInstitucional'] = $user['CorreoInstitucional'];
        $_SESSION['Telefono'] = $user['Telefono'];
        $_SESSION['Direccion'] = $user['Direccion'];
        $_SESSION['NombreCarrera'] = $user['NombreCarreras'];
        $_SESSION['NombreClase'] = $user['NombreClase1'];
        $_SESSION['NombreClase2'] = $user['NombreClase2'];
        header("Location: ../entradalogeo/home.php"); 
        exit();
    } else {
        echo "No se encontró el usuario.";
        header("Location: ../index.php");
        echo '<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>';
    }


//Profesores uninpahu

$sql4 = "SELECT *, NombreClase FROM ProfesUninPahu JOIN ClasesUninPahu ON ClaseId = idClase WHERE CorreoInstitucional = ? AND Contraseña = ? ";
$stmt = $conn->prepare($sql4);
$stmt->bind_param("ss", $email, $psw);
    $stmt->execute();
    $result4 = $stmt->get_result();

    if ($result4->num_rows > 0) {
        $user = $result4->fetch_assoc();
        $_SESSION['id_Profe'] = $user['idProfe'];
        $_SESSION['nombre'] = $user['Nombres'];
        $_SESSION['CorreoInstitucional'] = $user['CorreoInstitucional'];
        $_SESSION['Telefono'] = $user['Telefono'];
        $_SESSION['Direccion'] = $user['Direccion'];
        $_SESSION['NumeroClase'] = $user['ClaseId'];
        $_SESSION['NombreClase'] = $user['NombreClase'];
        header("Location: ../entradalogeop/inicionmaestros.php"); 
        exit();
    } else {
        echo "No se encontró el usuario.";
        header("Location: ../index.php");
        echo '<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>';
    }

//Profesores Sena

$sql5 = "SELECT * FROM ProfesSena JOIN ClasesSena ON ClaseId = idClase WHERE CorreoInstitucional = ? AND Contraseña = ? ";
$stmt = $conn->prepare($sql5);
$stmt->bind_param("ss", $email, $psw);
    $stmt->execute();
    $result5 = $stmt->get_result();

    if ($result5->num_rows > 0) {
        $user = $result5->fetch_assoc();
        $_SESSION['id_Profe'] = $user['idProfe'];
        $_SESSION['nombre'] = $user['Nombres'];
        $_SESSION['CorreoInstitucional'] = $user['CorreoInstitucional'];
        $_SESSION['Telefono'] = $user['Telefono'];
        $_SESSION['Direccion'] = $user['Direccion'];
        $_SESSION['NumeroClase'] = $user['ClaseId'];
        $_SESSION['NombreClase'] = $user['NombreClase'];
        header("Location: ../entradalogeop/inicionmaestros.php"); 
        exit();
    } else {
        echo "No se encontró el usuario.";
        header("Location: ../index.php");
        echo '<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>';
    }

//Profes Konrad lorenz

$sql6 = "SELECT * FROM ProfesKonradLorenz JOIN ClasesKonradLorenz ON ClaseId = idClase WHERE CorreoInstitucional = ? AND Contraseña = ? ";
$stmt = $conn->prepare($sql6);
$stmt->bind_param("ss", $email, $psw);
    $stmt->execute();
    $result6 = $stmt->get_result();

    if ($result6->num_rows > 0) {
        $user = $result6->fetch_assoc();
        $_SESSION['id_Profe'] = $user['idProfe'];
        $_SESSION['nombre'] = $user['Nombres'];
        $_SESSION['CorreoInstitucional'] = $user['CorreoInstitucional'];
        $_SESSION['Telefono'] = $user['Telefono'];
        $_SESSION['Direccion'] = $user['Direccion'];
        $_SESSION['NumeroClase'] = $user['ClaseId'];
        $_SESSION['NombreClase'] = $user['NombreClase'];
        header("Location: ../entradalogeop/inicionmaestros.php"); 
        exit();
    } else {
        echo "No se encontró el usuario.";
        header("Location: ../index.php");
        echo '<h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>';
    }

    $stmt->close();
}

$conn->close();
















