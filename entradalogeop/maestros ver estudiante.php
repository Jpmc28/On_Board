<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['id_Profe'])) {
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
    <link rel="stylesheet" href="css/maestros ver estudiante style.css">
    <link rel="website icon" type="png"
    href="img/logo_on_board_2-removebg-preview.png">
</head>
<body>
    <div class="contenedor_logo">
        <img src="img/logo_on_board_2-removebg-preview.png" alt="">
        </div>
        <div class="contenedor_boton">
           <button>aprobar</button>
        </div>
    <div class="contenedor_lista">
        <h2>Nilson lopez</h2>
        <h3>Clase: Ingles</h3>
        <h3>Correo: example@gmail.com</h3>
        <h3>Dirrecion: cra 65h #45-68</h3>
        <h3>Telefono: 35427639876</h3>      
 </div>
    <nav class="navbar">
        <ul class="nav_bar">
            <li>
                <a href="calendario.php"><img src="img/boton calendario.png" class="imagen"></a>
            </li>
            <li>
                <a href="inicionmaestros.php"><img src="img/boton retornar al principio de la pagina.png" class="imagen"></a>
            </li>
            <li>
                <a href="ver materias estudiantes.php"><img src="img/boton visualizar materias.png" class="imagen"></a>
            </li>
        </ul>
    </nav>
</body>
</html>