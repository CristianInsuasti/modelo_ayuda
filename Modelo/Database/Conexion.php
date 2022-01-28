<?php

class Conexion{

  public static function conectar(){
    $cnn = new PDO('mysql:host=localhost;port=3306;dbname=p_juridica','root','');
    $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $cnn;
  }
}
