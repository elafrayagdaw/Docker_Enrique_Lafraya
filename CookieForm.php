<?php
    include "vistas/cabecera.php"
?>
<body>
    <form action="Cookie.php" method="post">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"/><br>
        <label for="apellido">Apellidos</label><br>
        <input type="text" name="apellido" /><br>
        <label for="edad">Edad</label><br>
        <input type="radio" name="edad" value="1-18"/>Menor de 18.<br>
        <input type="radio" name="edad" value="19-60"/>Entre 18 y 60.<br>
        <input type="radio" name="edad" value="60+"/>Mayor de 60.<br>
        <input type="submit" name="enviar" value="Enviar"/><br/>
    </form>
</body>
<?php
    include "vistas/pie.php"
?>
</html>