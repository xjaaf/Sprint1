<?php

session_start();

if (isset($_POST["submit"])) {
   
    $_SESSION["username"] = htmlentities($_POST["username"]);
    $_SESSION["email"] = htmlentities($_POST["email"]);
    header("Location: Login-success.php");
    exit();
}else {
    header("Location: Form2.html");
    exit();
}
?>
