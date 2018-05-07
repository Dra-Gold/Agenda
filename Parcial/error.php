<?php

if(isset($_GET["error"]) && $_GET["error"] == 01)
    {
      echo " <div class='alert alert-danger container mt-2' role='alert'>";
      echo "El correo ya ha sido registrado";
      echo "</div>";
      setcookie("error", "", time()-3600);
    }
    if(isset($_GET["error"]) && $_GET["error"] == 02)
    {
      echo " <div class='alert alert-danger container mt-2' role='alert'>";
      echo "Contacte con el administrador";
      echo "</div>";
      setcookie("error", "", time()-3600);
    }
     if(isset($_GET["error"]) && $_GET["error"] == 03)
    {
      echo " <div class='alert alert-danger container mt-2' role='alert'>";
      echo "El correo o contraseña incorrecto";
      echo "</div>";
      setcookie("error", "", time()-3600);
    }
?>