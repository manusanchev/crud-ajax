<?php

    $nombre = $_POST["nombre"];
    $asignatura = $_POST["asignatura"];
    $nota = $_POST["nota"];
    require("BD.php");
    $bd = new BD();

    $bd->insertData($nombre,$asignatura,$nota);
    $contenido = $bd->getData();
    
    echo "{'hola':'s'}";

?>