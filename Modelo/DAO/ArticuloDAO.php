<?php
class ArticuloDAO
{

    /*
     * 
     * @var PDO
     * 
     */

    public function __construct(&$cnn)
    {
        $this->cnn = $cnn;
    }

    public function insertar(Articulo $articulo)
    {
        $sql = ("INSERT INTO articulos(nombre, descripcion, img, estado, id_usuario_actualizado, 
                id_usuario_registrado, created_at, updated_at)
                VALUES (:nombre, :descripcion, :img, :estado, :id_usuario_actualizado,:id_usuario_registrado, 
                :created_at, :updated_at)");
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute([
            'nombre' => $articulo->getNombre(),
            'descripcion' => $articulo->getDescripcion(),
            'estado' => 'Activo',
            'img' => $articulo->getImg(),
            'id_usuario_actualizado' => 1,
            'id_usuario_registrado' => 1,
            'created_at' => '2021-08-12',
            'updated_at' => '2021-08-12'
        ]);
        return $this->cnn->lastInsertId();
    }

    public function consultarArticulos()
    {
        $sql = "SELECT * 
                    FROM articulos
                    WHERE estado = Activo";
        $sentencia = $this->cnn->prepare($sql);
        return $sentencia->fetchall(PDO::FETCH_OBJ);
    }
}
