<?php
    $resultado="";
    $nombre = $_POST['nombre'];
    setcookie("nombre", $nombre,time()+3600*24*365);
    $apellido = $_POST['apellido'];
    setcookie("apellido",$apellido,time()+3600*24*365);
    $Edad = $_POST[ 'edad'];
    if($Edad == "1-18"){
        setcookie("edad","Menor de 18",time()+3600*24*365);
    }elseif($Edad == "19-60"){
        setcookie("edad","Entre 18 y 60", time()+3600*24*365);
    }else{
        setcookie("edad","mayor de 60", time()+3600*24*365);
    }
    $contador = 0;
    setcookie("entradas",$contador, time()+3600*24*365);
    if(isset($_POST['enviar'])){
        $contador = $_COOKIE['entradas'];
        $contador++;
    }
    $resultado .= "Nombre: " . htmlspecialchars($_COOKIE['nombre']) . "<br>";
    $resultado .= "Apellido: " . htmlspecialchars($_COOKIE['apellido']). "<br>";
    $resultado .= "Edad: " . htmlspecialchars($_COOKIE['edad']). "<br>";
    $resultado .= "Eres la persona numero " . htmlspecialchars($_COOKIE['entradas']) . "en acceder<br>";
    include "vistas/vista_resultado.php";
?>