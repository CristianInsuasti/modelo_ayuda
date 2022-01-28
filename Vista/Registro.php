<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->	
        <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
        <link rel="stylesheet" type="text/css" href="css/utill.css">
        <link rel="stylesheet" type="text/css" href="css/mainn.css">
        <script src="js/jquery-3.3.1-min.js" type="text/javascript"></script>
        <script src="js/menu.js" type="text/javascript"></script>
        <!--===============================================================================================-->
    </head>
    <body style="background-color: #999999;">
        <div class="limiter">
            <div class="container-login100">
                <div class="login100-more" style="background-image: url('images/bg-01.jpg');"></div>
                <div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
                    <form class="login100-form validate-form" id="frm">
                        <center> <div id="mensaje" class="alert hidden row text-center"></div></center>
                        <span class="login100-form-title p-b-59">
                            Registro
                        </span>
                        <div class="wrap-input100 validate-input" data-validate="Nombre Requerido">
                            <span class="label-input100">Nombre</span>
                            <input autocomplete="off" class="input100" type="text" id="txtNombre" placeholder="Nombre...">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Email requerido: ex@abc.xyz">
                            <span class="label-input100">Email</span>
                            <input autocomplete="off" class="input100" type="text" id="txtEmail" placeholder="Email...">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Calve requerida">
                            <span class="label-input100">Clave</span>
                            <input autocomplete="off" class="input100" type="Password" id="txtClave" placeholder="***********">
                            <span class="focus-input100"></span>
                        </div>
                        <!-- <div class="wrap-input100 validate-input" data-validate = "usuario requerido">
                            <span class="label-input100">Nonbre de usuario</span>
                            <input autocomplete="off" class="input100" type="text" id="txtUsuario" placeholder="USERNAME...">
                            <span class="focus-input100"></span>
                        </div> -->
                        <div class="flex-m w-full p-b-33">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="Recuerdame">
                                <label class="label-checkbox100" for="ckb1">
                                    <span class="txt1">
                                        Acepto
                                        <a href="#" class="txt2 hov1">
                                            Terminos de uso
                                        </a>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="container-login100-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button class="login100-form-btn">
                                    Registrarse
                                </button>
                            </div>
                            <a href="Login.php" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
                                Login
                                <i class="fa fa-long-arrow-right m-l-5"></i>
                            </a>
                        </div>
                         <script src="js/usuario/UsuarioNuevo.js" type="text/javascript"></script>
                    </form>
                </div>
            </div>
        </div>

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
