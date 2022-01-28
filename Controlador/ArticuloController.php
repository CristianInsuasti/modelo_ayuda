<?php

require_once '../Modelo/Database/Conexion.php';
require_once '../Modelo/VO/Articulo.php';
require_once '../Modelo/DAO/ArticuloDAO.php';
require_once './GenericoControlador.php';
require_once './Excepcion/ValidacionExcepcion.php';
require_once './Util/Validacion.php';

class ArticuloController extends GenericoControlador
{
    private $articuloDAO;

    public function __construct(&$cnn = NULL)
    {
        if (empty($cnn)) {
            $cnn = Conexion::conectar();
        }
        $this->articuloDAO = new ArticuloDAO($cnn);
    }

    public function insertar()
    {
        try {
            // Validacion::validar(['nombre' => 'obligatorio', 'descripcion' => 'obligatorio'], $_POST);
            $DescripcionVO = new Articulo;
            //$_POST -> Recibe la información del formulario por método POST
            $DescripcionVO->setNombre($_POST['nombre']);
            $DescripcionVO->setDescripcion($_POST['descripcion']);
            // $foto = ($_FILES['img']);

            // $nom_encriptado = md5($foto["tmp_name"]);
            $ruta = "../Vista/images";
            move_uploaded_file($_FILES['img'], $ruta);
            die();
            $this->articuloDAO->insertar($DescripcionVO);
            //Esto le indica a chrome que voy a devolver un object JSON
            $this->responderJson([
                'codigo' => 1, 'mensaje' => 'Registro completo con extito'
            ]);
        } catch (ValidacionExcepcion $error) {
            $this->responderJson(['codigo' => $error->getCode(), 'mensaje' => $error->getMessage()]);
        }
    }

    public function consultar()
    {
        try {
            $datos = $this->articuloDAO->consultarArticulos();
            $this->responderJson(['codigo' => 1, 'mensaje' => 'se consultó correctamente', 'datos' => $datos]);
        } catch (ValidacionExcepcion $error) {
            $this->responderJson(['codigo' => $error->getCode(), 'mensaje' => $error->getMessage()]);
        }
    }
}

$controlador = new ArticuloController();
$opcion = $_GET['opcion'];
$controlador->$opcion();
