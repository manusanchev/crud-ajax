<?php
    class BD{
        private $server = "localhost";
        private $usuario = "root";
        private $pass ="";
        private $db ="crud-ajax";
        private $conn ="";
        function __construct()
        {
            $this->conn = new mysqli($this->server,$this->usuario,$this->pass,$this->db);
        }

        function getData(){
            $sql = "SELECT id,nombre,asignatura,nota from alumnos order by id desc";
            $result = $this->conn->query($sql);

            $resultArray = ($result->num_rows > 0) ? $result->fetch_all(MYSQLI_ASSOC) : "";
          
            return $resultArray;

        }

        function insertData($nombre,$asignatura,$nota){
            if(strlen($nombre)<0){
                return "nombre";
            }elseif(strlen($asignatura)<0){
                return "asignatura";
            }elseif(strlen($nota)< 0){
                return "nota";
            }

            $sql = "INSERT INTO alumnos(nombre,asignatura,nota) values('$nombre','$asignatura','$nota')";
            return ($this->conn->query($sql)? true: false);
            

        }

        function deleteData($id){
            $sql = "DELETE FROM alumnos where id=$id";
            return($this->conn->query($sql) ? true : false);
        }

        function updateData($nombre,$asignatura,$nota){
            
            $sql = "UPDATE alumnos SET nombre='$nombre', asignatura='$asignatura', nota='$nota'";
            return($this->conn->query($sql) ? true : false);
        }
    }

  

?>