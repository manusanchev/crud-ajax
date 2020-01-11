<?php
 require("BD.php");
 $bd = new BD();



 $contenido = $bd->getData();

 echo json_encode($contenido);

?>