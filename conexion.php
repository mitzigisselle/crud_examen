<?php
    class conectar{
        private $servidor="localhost";
        private $usuario="root";
        private $bd="crupoo";
        private $password="";


        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                    $this->usuario,
                                    $this->password,
                                    $this->bd);
            return $conexion;
        }
    }

    $obj = new conectar();
    if($obj->conexion()){
        echo "";
    }else{
        echo "";
    }

?>