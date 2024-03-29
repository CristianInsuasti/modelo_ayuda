<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
session_destroy();
?>
<html lang="es">

<head>
    <script src="js/jquery-3.3.1-min.js" type="text/javascript"></script>
    <script src="js/menu.js" type="text/javascript"></script>
    <title>Login V14</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w " id="frm">
                    <center>
                        <div id="mensaje" class="alert hidden row text-center"></div>
                    </center>
                    <span class="login100-form-title p-b-32">
                        Iniciar Sesión
                    </span>

                    <span class="txt1 p-b-11">
                        Email
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate="Usuario Requerido">
                        <input class="input100" type="text" id="email">
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                        Contraseña
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate="Clave requerida">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" id="clave">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-48">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Recuerdame
                            </label>
                        </div>
                        <div>
                            <a href="CorreoRecuperar.php" class="txt3">
                                ¿Olvidaste tu contraseña?
                            </a>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" style="
                                    position: relative;
                                    bottom: 32px;
                                    ">
                            Ingresar
                        </button>
                        <button id="admin" class="login100-form-btn" style="
                                     position: relative;
                                     bottom: 32px;
                                     right: -88px;
                                     ">
                            ADMIN
                        </button>
                    </div>
                    <div>
                        <a href="Registro.php" class="txt3">
                            ¿No Tienes cuenta?
                            Registrate aqui
                        </a>
                    </div>
                    <script src="js/iniciosesion/iniciosesion.js" type="text/javascript"></script>
                    <!--                        <script src="js/iniciosesion/iniciosesionADMIN.js" type="text/javascript"></script>-->
                </form>
            </div>
        </div>
    </div>
    <div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>
</body>

</html>