<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class DatabaseConnection 
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "student_db";
    private $conn; 
     

    public function __construct() {
        $this->conn = new mysqli($this->servername,
        $this->username, $this->password, $this->dbname);
       
    }        
        
// Create connection
    public function connect() {
// Check connection     
    if ($this->conn->connect_error) {
        die("Connection failed: "
            . $this->conn->connect_error);
    } 
    return $this->conn;
}

    // function to execute select queries
    public function executeSelectQuery($sql) {
        $result = mysqli_query($this->conn, $sql);
        $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $data;
    }

//Run SQL query
public function executeQuery($sql) {
    $result = mysqli_query($this->conn, $sql);
    $row = mysqli_affected_rows($this->conn);
    return $row;
}


// Close connection
public function closeConnection() {
    $this->conn->close();
}

}

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "student_db";

// $dbConnect = new DatabaseConnection($servername, $username, $password, $dbname);

// $dbConnect->closeConnection();

$db = new DatabaseConnection();

//Create a database connection
$con = $db->connect();

?>