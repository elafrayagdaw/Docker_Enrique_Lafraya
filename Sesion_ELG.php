<?php
    session_start();
    $resultado="";
    $_SESSION['nombre'] = $_REQUEST['nombre'];
    $_SESSION['apellido'] = $_REQUEST['apellido'];
    $contador = 0;
    setcookie("accesos",$contador,time()+3600*24*365);
    if(isset($_POST['enviar'])){
        $contador = $_COOKIE['accesos'];
        $contador++;
    }
    $resultado .= "Nombre: " . $_SESSION['nombre'] . "<br>";
    $resultado .= "Apellido: " . $_SESSION['apellido'] . "<br>";
    $resultado .= "Eres la persona numero " . htmlspecialchars($_COOKIE['accesos']) . "en acceder<br>";
    include "vistas/vista_resultado.php";
?>