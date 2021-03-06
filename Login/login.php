<?php
    session_start();

    if(isset($_SESSION['cliente'])){
        header("Location: ../User/index.php");
    }

    if(isset($_SESSION['admin'])){
        header("Location: ../Admin/index.php");
    }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Sesion</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
        <link rel="stylesheet" type="text/css" href="css/iofrm-theme2.css">

        <link rel="shortcut icon" href="images/LogoC.png">
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body>

        <div class="form-body" class="container-fluid">


            <div class="row">
                <div class="img-holder" heigth="10px">
                    <div class="bg"></div>
                    <div class="info-holder">

                    </div>
                </div>

                <div class="form-holder">

                    <div class="form-content">

                        <div class="form-items">
                            <img src="images/LogoC.png" width="75px" height="75px">
                            <span class="icon deco"></span>
                            <h3>Resort House</h3>

                            <p>El mejor Hotel que puedas imaginar</p>
                            <div class="page-links">
                                <a href="login.php" class="active">Inicia Sesión</a><a href="register.php">Registrate</a>
                            </div>
                            <form method="POST" action="index.php">
                                <input class="form-control" type="text" name="user" placeholder="Usuario" required>
                                <input class="form-control" type="password" name="contrasena" placeholder="Contraseña" required>
                                <input type="checkbox" id="chk1"><label for="chk1">Recuerdame</label>
                                <div class="form-button">
                                    <button id="submit" type="submit" class="ibtn" value="Ingresar">Ingresar</button>
                                </div>
                            </form>
                            <div class="other-links">
                                <span>O bien inicia la sesión con</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>

    </html>