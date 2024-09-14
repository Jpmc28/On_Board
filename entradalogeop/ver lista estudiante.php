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
    <link rel="stylesheet" href="css/ver lista estudiante style.css">
    <link rel="website icon" type="png"
    href="img/logo_on_board_2-removebg-preview.png">
</head>
<body>

<div class="contenedor_seleccion1">
        <details>
            <summary>Clase</summary>
            <p><?php echo "<li><button>" . $_SESSION["NombreClase"] . "</button></li>";?></p>
        </details>
    </div>
    <div class="contenedor_seleccion">
        <details>
            <summary>Ficha</summary>
            <p><?php echo "<li><button>" . $_SESSION['NumeroClase'] . "</button></li>";?></p>
        </details>
    </div>

<div class="contenedor_logo">
<img src="img/logo_on_board_2-removebg-preview.png" alt="">
</div>


<div class="contenedor_lista">
       <h2>2877651</h2>
       <h3>Juan pablo martin</h3>
       <h3>Duvan guerra</h3>
       <h3>Nilson lopez</h3>
       <h3>carlos siza</h3>
       <h3>jhon vera</h3>
     
</div>
    <div class="contenedor_logo">


    </div>


<div class="contenedor_botones">
        <a href="maestros ver estudiante.php"><button class="ver">Ver</button></a>
        <a href="maestros ver estudiante.php"><button class="ver">Ver</button></a>
        <a href="maestros ver estudiante.php"><button class="ver">Ver</button></a>
        <a href="maestros ver estudiante.php"><button class="ver">Ver</button></a>
        <a href="maestros ver estudiante.php"><button class="ver">Ver</button></a>
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