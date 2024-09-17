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
    <form action="../phpbacklogeoandresgister/actualizardatos.php" method="POST">
        <input id="nombre" name="nombre" type="text" value="<?php echo $_SESSION['nombre']?>" placeholder="Nombre" required>
        <input id="numero" name="numero" type="text" value="<?php echo $_SESSION["Telefono"]?>" placeholder="Teléfono" required>
        <input id="direccion" name="direccion" type="text" value="<?php echo $_SESSION['Direccion']?>" placeholder="Dirección" required>
        <input type="email" name="email" id="email" value="<?php echo $_SESSION['CorreoInstitucional']?>" placeholder="Correo" required>
        <button type="submit" id="g"><h3>Guardar</h3></button>
    </form>
</div>

    <div>
        <a href="home.php">
        <button id="c"><h3>cancelar</h3></button>
        </a>
    </div>
</body>
</html>