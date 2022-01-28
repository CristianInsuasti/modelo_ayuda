<?php

//require_once '../Database/Conexion.php';
//require_once '../vo/Usuario.php';

class UsuarioDAO
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

    public function insertar(Usuario $usuario)
    {
        $sql = ("INSERT INTO usuarios(nombre,email,clave,estado,id_usuario_actualizado,id_usuario_registrado, 
                created_at, updated_at)
                VALUES (:nombre,:email,:clave,:estado,:id_usuario_actualizado,:id_usuario_registrado, 
                :created_at, :updated_at)");
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute([
            'nombre' => $usuario->getNombre(),
            'email' => $usuario->getEmail(),
            'clave' => $usuario->getClave(),
            'estado' => 'Activo',
            'id_usuario_actualizado' => 1,
            'id_usuario_registrado' => 1,
            'created_at' => '2021-08-12',
            'updated_at' => '2021-08-12'
        ]);
        return $this->cnn->lastInsertId();
    }


    public function iniciarSesion($email, $clave)
    {
        $sql = "SELECT * FROM usuarios WHERE email=:email AND clave = :clave AND estado = :estado";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute(['email' => $email, 'clave' => $clave, 'estado' => 'Activo']);
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        if (empty($resultado)) {
            throw new ValidacionExcepcion('Error en el usuario y/o clave', -1);
        }
        return $resultado[0];
    }

    // public function eliminar($id) {
    //     $sql = "DELETE from jugador where idJugador = :id";
    //     $sentencia = $this->cnn->prepare($sql);
    //     $sentencia->execute(['id' => $id]);
    // }

    // public function actualizar(Usuario $usuario) {
    //     $sql = "UPDATE jugador SET nombre= :nombre, email = :email, clave = :clave, usuario = :usuario, estado = :estado WHERE idJugador = :id ";
    //     $sentencia = $this->cnn->prepare($sql);
    //     $sentencia->execute([
    //         'nombre' => $usuario->getNombre(),
    //         'email' => $usuario->getEmail(),
    //         'clave' => $usuario->getClave(),
    //         'usuario' => $usuario->getUsuario(),
    //         'estado' => $usuario->getEstado(),
    //         'id' => $usuario->getIdJugador()
    //     ]);
    //     return $this->cnn->lastInsertId();
    // }

    // public function consultarTorneosUsuario($usuario) {
    //     $sql = "SELECT t.nombreTorneo, jue.nombreJuego, t.idTorneo   
    //             FROM torneo T INNER JOIN jugador J 
    //             ON T.idJugador = J.idJugador INNER JOIN juego jue
    //             ON T.idJuego = jue.idJuego
    //             WHERE J.usuario = :usuario";
    //     $sentencia = $this->cnn->prepare($sql);
    //     $sentencia->execute(['usuario' => $usuario]);
    //     return $sentencia->fetchall(PDO::FETCH_OBJ);
    // }

    //    public function consultarInscritos($idTorneo) {
    //        $SQL = "SELECT J.nombre, T.nombreTorneo, J.idJugador
    //        FROM jugador_torneo JT INNER JOIN torneo T 
    //        ON JT.idTorneo = T.idTorneo INNER JOIN jugador J
    //        ON JT.idJugador = J.idJugador WHERE  JT.idTorneo = :idTorneo";
    //        $sentencia = $this->cnn->prepare($SQL);
    //        $sentencia->execute(['idTorneo' => $idTorneo]);
    //        return $sentencia->fetchall(PDO::FETCH_OBJ);
    //    }
    // public function consultarInscritos($idJugador) {
    //     $SQL = "SELECT J.nombre, T.nombreTorneo, J.idJugador, JT.idTorneo FROM jugador_torneo JT
    //             INNER JOIN torneo T ON JT.idTorneo = T.idTorneo INNER JOIN jugador J 
    //             ON JT.idJugador = J.idJugador WHERE T.idJugador = :idJugador";
    //     $sentencia = $this->cnn->prepare($SQL);
    //     $sentencia->execute(['idJugador' => $idJugador]);
    //     return $sentencia->fetchall(PDO::FETCH_OBJ);
    // }

    // public function eliminarJugadorTorneo($id, $idTorneo) {
    //     $sql = "DELETE from jugador_torneo where idJugador = :id AND idTorneo = :idTorneo";
    //     $sentencia = $this->cnn->prepare($sql);
    //     $sentencia->execute(['id' => $id, 'idTorneo' => $idTorneo]);
    // }

    // public function iniciarSesionADMIN($usuario, $clave) {
    //     $sql = "SELECT * FROM jugador WHERE usuario=:usuario AND clave = :clave AND estado = :estado|:estado AND tipo = :tipo";
    //     $sentencia = $this->cnn->prepare($sql);
    //     $sentencia->execute(['usuario' => $usuario, 'clave' => $clave, 'estado' => 'Activo|Enfrentado', 'tipo' => 'ADMIN']);
    //     $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //     if (empty($resultado)) {
    //         throw new ValidacionExcepcion('Error en el usuario y/o clave', -1);
    //     }
    //     return $resultado[0];
    // }

    //     public function consultarTorneo($idJugador) {
    //         $sql = "SELECT T.idTorneo
    //                 FROM jugador J INNER JOIN torneo T
    //                 ON J.idJugador = T.idJugador
    //                 WHERE J.idJugador = :idJugador";
    //         $sentencia = $this->cnn->prepare($sql);
    //         $sentencia->execute(['idJugador' => $idJugador]);
    //         return $sentencia->fetchall(PDO::FETCH_OBJ);
    //     }

}

//SELECT T.idTorneo
//FROM jugador J INNER JOIN torneo T
//ON J.idJugador = T.idJugador
//WHERE J.idJugador = '15' 
