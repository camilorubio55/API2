<?php
//class BD{
     $host = "localhost";
     $db_name = "test";
     $username = "root";
     $password = "";
     //$conn;

     /*$conexion = mysqli_connect($host,$db_name,$password,$db_name);

     $consulta = "SELECT * FROM proyecto p INNER JOIN deproyecto d ON p.PROYECTOID = d.PROYECTOID ";

     $resultado = mysqli_query($conexion,$consulta);

    // $row = mysqli_fetch_row($resultado);

     while(($row=mysqli_fetch_row($resultado))==true){
        echo $row[0] . " "; echo $row[1] . " "; echo $row[2] . " "; echo $row[3] . " ";
        echo "<br>";
     }

     mysqli_close($conexion);*/
     //echo $resultado;
     

    /*public function getConnection(){
        $this -> conn = null;

        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error:" . $exception->getMessage();
        }
        return $this-> conn;
    }*/
//}
?>