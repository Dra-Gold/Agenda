<?php
require("UserService.php");

 //se crea una instancia de la clase UserService
 $UserSer= new UserService();

//verificaion si se esta enviando un objeto action que sea igual a crear
if(isset($_POST['action']) && $_POST['action'] == 'crear')
{
    //se reciven las variables obtenidas desde el formulario UserNewForm.php por metodo post
    $Nombre=htmlentities(addslashes($_POST["nombre"]));
    $Password=htmlentities(addslashes(password_hash($_POST["contraseña"],PASSWORD_DEFAULT)));
    $Email=htmlentities(addslashes($_POST["email"]));
    $Genero=htmlentities(addslashes($_POST["GeneroOptions"]));
    //se verifica le existencia del usuario
    if($UserSer->get_Email($Email))
    {
        //Por alguna razon las cookies no funcionan?
        //setcookie("error","El correo ya ha sido registrado",time()+60*360);
        header("location:../UserNew.php?error=01");
    }
    else
    {
        //se verifica so la funcion create_User perteneciente a la clase UserService() a realizado el insert
    if($UserSer->create_User($Nombre,$Email,$Password,$Genero)!=0)
    {
        //se redirige al usuario a una pagina confirmando la creacion del nuevo usuario
        header("location:../index.php");
    }else{
        //Por alguna razon las cookies no funcionan?
         //se redirige al usuario y se le informa del error 
        //setcookie("error","Ocurrio un error interno",time()+60*360);
        header("location:../UserNew.php?error=02");
    }
    }

    
}

if(isset($_POST['action']) && $_POST['action'] == 'verificar')
{
    
    $Email=htmlentities(addslashes($_POST["correo"]));
    $Password=htmlentities(addslashes($_POST["contraseña"]));
    //se verifica  el password 
    if($UserSer->get_User($Email,$Password))
    {
        //se obtiene el nombre de usuario 
        $Username=$UserSer->get_Username($Email);
        session_start();
        $_SESSION["Estado"]="Verificado";
        $_SESSION["correo"]=$Email;
        $_SESSION["usuario"]=$Username;
        header("Location:../index.php");
    }
    else
    {
        //setcookie("error","El correo o contraseña incorrecto",time()+60*60);
        header("Location:../LoginUser.php?error=03");
    }
  

}
?>