<?php
if(isset($_COOKIE["error"]))
    {
      echo " <div class='alert alert-danger container mt-2' role='alert'>";
      echo $_COOKIE["error"];
      echo "</div>";
      setcookie("error", "", time()-3600);
    }
?>