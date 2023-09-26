<?php
session_start();

if (!isset($_SESSION['correo']) || empty($_SESSION['correo'])) {
    header('location: includes/_sesion/login.php');
    exit();
}
else{
   header('location: views/usuarios/index.php');
}
?>
