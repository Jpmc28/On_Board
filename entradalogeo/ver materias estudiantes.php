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
    
                <p>Ingles</p>
                <p>python</p>
                <p>html</p>
                <p>c++</p>
            </details>
        </div>


    <div class="contenedor_lista">
        <h2>Ingles</h2>
        <h3>Verbo To Be: aprobado</h3>
        <h3>Do-Does: aprobado</h3>
        <h3>Pronombres: no aprobado</h3>
        <h3>listen: no calificado</h3>
       
      
 </div>





    <nav class="navbar">
        <ul class="nav_bar">
            <li>
           <a href="inicion maestros.html"><img src="img/logo.png" alt=""></a>
            </li>
        </ul>
    </nav>
</body>
</html>