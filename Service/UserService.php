<?php
//se llama a la conexion
require("../Conexion/conexion.php");

class UserService extends Conexion{

   function UserService(){
     //se llama al contructor del padre
    parent::__construct();
  }
  // se crea el usuario
  public function create_User($Nombre,$Email,$Password,$Genero){
    $sql="insert into user values (NULL,:nombre,:genero,:correo,:password)";
    $resultado=$this->conexion_db->prepare($sql);
    $resultado->bindValue(':nombre',$Nombre,PDO::PARAM_STR);
    $resultado->bindValue(':genero',$Genero,PDO::PARAM_STR);
    $resultado->bindValue(':correo',$Email,PDO::PARAM_STR);
    $resultado->bindValue(':password',$Password,PDO::PARAM_STR);
    $resultado->execute();
    $Confirmar_registro=$resultado->rowCount();
    return $Confirmar_registro;
  }

  public function delete_User(){

  }

  public function update_User(){

  }
  // se verifica si el usuario con los datos del login
  public function get_User($correo,$password){
    $sql="select * from user where Correo= :correo";
    $resultado=$this->conexion_db->prepare($sql);
    $resultado->bindValue(':correo',$correo,PDO::PARAM_STR);
    $resultado->execute();
    $registro=$resultado->fetch(PDO::FETCH_ASSOC);
    return password_verify($password,$registro['Contraseña']);
  }

  //se obtiene el usuario 
  public function get_Username($correo){
    $sql="select * from user where Correo= :correo";
    $resultado=$this->conexion_db->prepare($sql);
    $resultado->bindValue(':correo',$correo,PDO::PARAM_STR);
    $resultado->execute();
    $registro=$resultado->fetch(PDO::FETCH_ASSOC);
    return $registro["Nombre"];
  }
  // se obtiene el correo para verificar su exitencia
  public function get_Email($correo)
  {
    $sql="select * from user where Correo= :correo";
    $resultado=$this->conexion_db->prepare($sql);
    $resultado->bindValue(':correo',$correo,PDO::PARAM_STR);
    $resultado->execute();
    $registro=$resultado->fetch(PDO::FETCH_ASSOC);
    return $registro;
  }


}
?>