<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Conexio{
    private $host;
    private $db;
    private $dsn;
    private $user;
    private $pass;
    public $conexio;

    public function __construct()
    {
        $this->host = 'casa-rural.c3colaxbx5fi.us-east-1.rds.amazonaws.com';
        $this->db = "casaRural";
        $this->dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db . ';';
        $this->user = 'rohit';
        $this->pass = "12345678";


    }

    public function openConnection(){
        try {
            $this->conexio = new PDO($this->dsn, $this->user, $this->pass);
            echo 'Connexio ok<br>';
            return $this->conexio;
        }catch (PDOException $ex){
            echo "Error: " . $ex;
            return null;
        }
    }

    public function closeConnection(){
        try {
            $this->conexio=null;
            return $this->conexio;
        }catch (PDOException $ex){
            echo "Error: " . $ex;
            return null;
        }

    }

    public function getAllUsuaris(){
        try {
            $result = $this->conexio->query("SELECT * FROM usuaris");
            return $result;
        }catch(PDOException $ex){
            echo "Error: " . $ex;
        }
    }

//    public function getAllMps(){
//        try{
//            $result = $this->conexio->query("SELECT * FROM mp");
//            return $result;
//        }catch(PDOException $ex){
//            echo "Error: " . $ex;
//        }
//
//    }



    public function addUsuari($mail, $nom, $cognoms, $contra)
    {
        try {
            $result = $this->conexio->query("INSERT INTO usuaris (mail,nom,cognoms,contra) VALUES('$mail','$nom', '$cognoms' ,'$contra')");
            return $result;
        } catch (PDOException $ex) {
            echo "Error: " . $ex;
        }

    }
//
    public function getUsuariPerId($id)
    {
        try {
            $query = "SELECT * FROM usuaris WHERE mail=:id";
            $statement = $this->conexio->prepare($query);
            $statement->execute(
                array(
                    ':id' => $id
                )
            );
            //jaume de cf4
            //jaume de cf4
            //jaume de cf4
            //jaume de cf4
            //jaume de cf4
            //jaume de cf4
            //jaume de cf4
            //jaume de cf4
            //jaume de cf4

            $result = $statement->fetch();
            $user = new user ($result['nom'], $result['cognoms'], $result['mail'], $result['contra']);
            return $user;
        } catch (PDOException $ex) {
            echo "Error: " . $ex;
        }

    }





}


?>