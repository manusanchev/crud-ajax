<?php
    class BD{
        private $server = "localhost";
        private $usuario = "root";
        private $pass ="";
        private $db ="chat";
        private $conn ="";
        function __construct()
        {
            $this->conn = new mysqli($this->server,$this->usuario,$this->pass,$this->db);
        }

        function getUsuarios(){
            $sql = "SELECT id,usuario_nombre,usuario_pass,usuario_foto from usuarios";
            $result = $this->conn->query($sql);

            $resultArray = ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : "";
          
            return $resultArray;

        }
        function getMensajes($receptor_id,$emisor_id){
            $sql = "SELECT mensaje_id FROM mensajes where receptor_id = $receptor_id and emisor_id = $emisor_id";
            $result = $this->conn->query($sql);
            $resultArray = ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : "";
            return $resultArray;
        }
        function insertMensaje($receptor_id,$emisor_id,$mensaje){
            $sql = "INSERT INTO mensajes(emisor_id,receptor_id,mensaje) values($emisor_id,$receptor_id,'$mensaje')";
            $result = $this->conn->query($sql);

            return ($result->num_rows > 0);
        }

        
        
    }

  

?>