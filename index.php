<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stilosindex.css">
    <link rel="website icon" href="img/logo_on_board_2-removebg-preview.png">
    <title>Iniciar Sesion en On-Board</title>
</head>
<body>
    <img src="img/logo_on_board_2-removebg-preview.png" alt="" id="logo">
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
                <div class="card-front">
                    <form action="phpbacklogeoandresgister/login1.php" method="POST">
                        <section class="Ingresar">
                            <img src="img/user.png" alt="" id="user">
                            <br>
                            <div class="alado">
                            <button type="button" id="ingresarbuton" class="active" onclick="openLogin()">Inicio</button>
                            <button type="button" onclick="openRegister()" id="registrarsebuton">Registro</button>
                            </div>
                            <br>
                            <input type="email" name="email" id="email" placeholder="Correo Institucional" required>
                            <br>
                            <input type="password" name="password" id="password" placeholder="Contraseña" required>
                            <br>
                            <button type="submit" id="ingresar">Iniciar sesión</button>
                            <br>
                            <a href="#" id="OMC">Olvide mi contraseña</a>
                        </section>
                    </form>
                </div>
                <div class="card-back">
                    <form action="phpbacklogeoandregister/registrarse.php" method="POST">
                        <section class="Registrarse">
                            <img src="img/Captura_de_Pantalla_2024-08-04_a_la_s__4.26.12_p._m.-removebg-preview.png" alt="" id="register">
                            <div class="alado">
                            <button type="button" onclick="openLogin()" id="ingresarbuton2">Inicio</button>
                            <button type="button" onclick="openRegister()" id="registrarsebuton2" class="active">Registro</button>
                            </div>
                            <div id="boxingresar">
                            <input class="entrar" type="email" name="email" id="email" placeholder="Correo Institucional Valido" required>
                            <br>
                            <input class="entrar" type="password" name="password" id="password" placeholder="Contraseña" required>
                            <br>
                            <input class="entrar" type="password" name="password" id="confirm_password" placeholder="Confirmar contraseña" required>
                            <br>
                            </div>
                            <button type="submit" id="resgistro_oficial">Registrarme</button>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/index.js"></script>
</body>
</html>
