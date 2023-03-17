<?php
    // session_start();
    // unset($_SESSION["id"]);
    // unset($_SESSION["name"]);
    setcookie("username", "", time()-3600, "/");
    header("Location:index.php");
?>