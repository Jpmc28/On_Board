<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['id_Estudiante'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On board</title>
    <link rel="stylesheet" href="css/ver materias estudiantes style.css">
    <link rel="website icon" type="png"
    href="img/logo_on_board_2-removebg-preview.png">
</head>
<body>
    <div class="contenedor_logo">
        <img src="img/logo_on_board_2-removebg-preview.png" alt="">
        </div>
        <div class="contenedor_seleccion">
            <details>
                <summary>Clase</summary>
                <p><?php echo "<li>" . $_SESSION["NombreClase"] . "</li>";?></p>
            </details>
        </div>
    <div class="contenedor_lista">
        <h2></h2>
        <h3> <?php echo $_SESSION[""];?></h3>
        <h3> <?php echo $_SESSION[""];?></h3>
        <h3> <?php echo $_SESSION[""];?></h3>
        <h3> <?php echo $_SESSION[""];?></h3>     
    </div>
    <nav class="navbar">
            <ul class="nav_bar">
                <li>
                    <a href="calendario.php"><img src="img/boton calendario.png" class="imagen"></a>
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