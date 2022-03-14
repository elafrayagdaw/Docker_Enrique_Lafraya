<?php
    include "vistas/cabecera.php"
?>
<body>
    <form action="Sesion_ELG.php" method="post">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"/><br>
        <label for="apellido">Apellidos</label><br>
        <input type="text" name="apellido" /><br>
        <input type="submit" name="enviar" value="Enviar"/><br/>
    </form>
</body>
<?php
    include "vistas/pie.php"
?>
</html>