<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['id_Estudiante'])) {
    header("Location: index.php");
    exit();
}
//numero de semestre
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/carreraestilos.css">
    <link rel="website icon" type="png"
    href="img/logo_on_board_2-removebg-preview.png">
    <title>micarrera</title>
</head>
<body>
    <div class="contenedor_img">
        <img src="img/logo_on_board_2-removebg-preview.png" alt="logo on board">
    </div>
    <section class="contenedor">
    <div class="contenedor_carrera">
         <h1>Ing. Software</h1>
    </div>
    <div class="porcentaje" style="--porcentaje: <?php echo $_SESSION["NumeroDeSemestre"];?>">
        <svg class="svg" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
            <circle r="45" cx="50" cy="50" pathlength="100" />
            <circle r="45" cx="50" cy="50" pathlength="100" />
        </svg>
        <span><?php echo htmlspecialchars($_SESSION["NumeroDeSemestre"]); ?>%</span>
    </div>
    <nav class="navbar">
        <ul class="nav_bar">
            <li>
                <a href=""><img src="img/boton calendario.png" class="imagen"></a>
            </li>
            <li>
                <a href="home.php"><img src="img/boton retornar al principio de la pagina.png" class="imagen"></a>
            </li>
            <li>
                <a href="ver materias estudiantes.php"><img src="img/boton visualizar materias.png" class="imagen"></a>
            </li>
        </ul>
    </nav>
</body>
</html>