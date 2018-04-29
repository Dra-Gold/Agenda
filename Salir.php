<?php

session_start();
if(isset($_SESSION["Estado"]))
{
    session_destroy();
    header("location:Index.php");
}

?>