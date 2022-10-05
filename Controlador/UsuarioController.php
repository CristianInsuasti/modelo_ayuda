<?php

require_once '../Modelo/Database/Conexion.php';
require_once '../Modelo/VO/Usuario.php';
require_once '../Modelo/DAO/UsuarioDAO.php';
require_once './GenericoControlador.php';

class GestionUsuarioController extends GenericoControlador
{

    private $usuarioDAO;

    public function __construct(&$cnn = NULL)
    {
        if (empty($cnn)) {
            $cnn = Conexion::conectar();
        }
        $this->usuarioDAO = new UsuarioDAO($cnn);
    }

    public function iniciarSesion()
    {

        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $infoUsuario = $this->usuarioDAO->iniciarSesion($email, $clave);
        session_start();
        $_SESSION['usuario'] = $infoUsuario;

        if ($infoUsuario) {

            $this->responderJson(['codigo' => 1]);
        } else {

            $this->responderJson(['codigo' => '500']);
        }
    }
    public function insertar()
    {

        $UsuarioVO = new Usuario;
        $UsuarioVO->setNombre($_POST['nombre']);
        $UsuarioVO->setEmail($_POST['email']);
        $UsuarioVO->setClave($_POST['clave']);
        $this->usuarioDAO->insertar($UsuarioVO);

        if ($UsuarioVO) {

            $this->responderJson(['codigo' => 1, 'mensaje' => 'Registro completo con extito']);
        } else {

            $this->responderJson(['codigo' => '500']);
        }
    }
}

$controlador = new GestionUsuarioController();
$opcion = $_GET['opcion'];
$controlador->$opcion();
