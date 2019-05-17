<?php

class WriteToDB{

    private static $instance = null;
    private $conn;

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "logcreator";
    public $message;


    private function __construct(){
      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function connectToDb(){
      if(!self::$instance){
        self::$instance = new WriteToDB();
      }
      return self::$instance;
    }

    private function createSqlCommand($message){
        $message = '"' . $message . '"';
        return "INSERT INTO logs (content) VALUES ($message)";
    }

    private function executeSqlCommand($sql){
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function recordDataToDB($message){
        $b = $this->createSqlCommand($message);
        $this->executeSqlCommand($b);
    }
}


/*
class WriteToDB{

    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "logcreator";
    public $message;

    public function __construct($message){
        $this->message = '"' . $message . '"';
    }

    public function createConnection(){
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public function createSqlCommand(){
        return "INSERT INTO logs (content) VALUES ($this->message)";
    
    }

    public function executeSqlCommand($conn, $sql){
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function recordDAtaToDB(){
        $a = $this->createConnection();
        $b = $this->createSqlCommand();
        $this->executeSqlCommand($a, $b);
    }
}

*/





?>

