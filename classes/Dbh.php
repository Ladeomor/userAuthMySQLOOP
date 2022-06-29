<?php
//created class Dbh with properites and set values for them
class Dbh{
    public $hostname = "127.0.0.1";
    public $username = "root";
    public $password = "";
    public $dbname = "zuriphp";

    protected function connect(){
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if(!$conn){
            echo "<script> alert('Error connecting to the database') </script>";
        }
        return $conn;
    }
}

?>