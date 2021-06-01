<?php
// pulls the values from the database

class db_pull
{

    private $database;
    private $servername;
    private $username;
    private $password;
    public $conn;

    function __construct($conn)
    {
        $this->servername = "localhost";
        $this->database = "nicDB";
        $this->username = "admin";
        $this->password = "password";
        $this->conn = $conn;
    }

    public function pullDB()
    {
        // $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);

        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }


        $sql_req = "SELECT name, email, number FROM Testing";
        $result = $this->conn->query($sql_req);
        while ($row = $result->fetch_assoc()) {
            echo "name: " . $row["name"] . ", email: " . $row["email"] . ", number: " . $row["number"] . "<br>";
        }

        mysqli_close($this->conn);
    }
}
