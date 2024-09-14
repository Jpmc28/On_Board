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
    <title>on board</title>
    <link rel="stylesheet" href="css/inicion maestros style.css">
    <link rel="website icon" type="png"
    href="img/logo.png">
</head>
<body>
    
   <div class="contenedor_img">
    <img src="img/logo_on_board_2-removebg-preview.png" alt="logo on board">
   </div>


   <div class="contenedor_info">
        <img src="img/user.png">
        <h2>Nombre: <?php echo htmlspecialchars($_SESSION['nombre']); ?></h2>
        <h2>Correo: <?php echo htmlspecialchars($_SESSION['CorreoInstitucional']); ?></h2>
        <h2>Direccion: <?php echo htmlspecialchars($_SESSION['Direccion']); ?></h2>
        <h2>Telefono: <?php echo htmlspecialchars($_SESSION['Telefono']); ?></h2>
      <a href="">
        <button>Editar Datos</button>
    </a>
     </div>


<a href="ver lista estudiante.php">

     <div class="contenedor_boton">
        <img src="img/listas.png">
        <h2>listas</h2>
       
     </div>
</a>

</body>
</html>