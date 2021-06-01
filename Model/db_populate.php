
<?php
// populates the database with 10 rows for the test

class db_populate
{

    private $conn;
    private $database;
    private $logs;

    function __construct(&$conn, $database, &$logs = new logs()) {
        $this->conn = $conn;
        $this->database = $database;
        $this->logs = $logs;
    }

}
?>