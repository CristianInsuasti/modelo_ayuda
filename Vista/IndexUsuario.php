<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location:Login.php');
}
$usuario = $_SESSION['usuario'];
?>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> </title>
<!--        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />-->
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/local.css" />
        <script src="js/jquery-3.3.1-min.js" type="text/javascript"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        
        <script src="js/menu.js" type="text/javascript"></script>
    </head>
    <body>
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div id="menu" class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul id="active" class="nav navbar-nav side-nav">
                        <li class="selected"><a href="#"><i class="fa fa-bullseye"></i>  Home</a></li>
                        <li><a href="NuevoArticulo.php"><i class="fa fa-font"></i>Crear Nuevo Articulo</a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right navbar-user">

                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $usuario->nombre ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="divider"></li>
                            <li><a href="Login.php"><i class="fa fa-power-off"></i> Cerrar Sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <style>
                #formulario{
                    width: 100%;
                    height: 100%;
                }
            </style>

            <div id="formulario" class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
              <center> <div id="mensaje" class="alert hidden row text-center"></div>
                 <span>Articulos</span>
              </center>
            </div>


            <script type="text/javascript">

                (function () {
                    $('div#menu a').on('click', function (e) {
                        e.preventDefault();
                        var url = $(this).attr('href');
                        $.get(url, function (html) {
                            $('#formulario').empty().append(html);
                        });
                    });
                })();
            </script>
    </body>
</html>