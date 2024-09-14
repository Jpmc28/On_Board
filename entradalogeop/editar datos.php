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
    <title>On Board</title>
    <link rel="stylesheet" href="css/editar datos.css">
    <link rel="website icon" type="png"
    href="img/logo_on_board_2-removebg-preview.png">
</head>
<body>
    <div class="contenedor-todo">
    </div>

    <h1><?php echo $_SESSION['nombre']?></h1>

    <div>
        <input id="nombre" type="text" placeholder="<?php echo $_SESSION['nombre']?>">
        <input id="numero" type="text" placeholder="<?php echo $_SESSION['Telefono']?>">
        <input id="direccion" type="text" placeholder="<?php echo $_SESSION['CorreoInstitucional']?>">
        <input id="email" type="text" placeholder="<?php echo $_SESSION['Direccion']?>">
    </div>

    <div>
        <button id="g"><h3>guardar</h3></button>
        <a href="inicionmaestros.php">
        <button id="c"><h3>cancelar</h3></button>
        </a>
    </div>
</body>
</html>