<?php
require_once("LoginController.php"); 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    $nombre = $_POST['nombre'];
    $contra = $_POST['contra'];
    if ($type === 'login') {
        $login = new LoginController();
        $login->login($nombre, $contra);
    }
    else {
        echo "Tipo de operación no válido";
    }
}

?>