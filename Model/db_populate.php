
<?php
// populates the database with 10 rows for the test

// require('./util/logs.php'); and $logs = new logs(); already
// in db_setup.php which is called before this so not needed
class db_populate
{

    private $logs;
    private $servername;
    private $username;
    private $password;
    private $database;
    public $conn;

    function __construct($database)
    {
        $this->logs = new logs();
        $this->servername = "localhost";
        $this->database = $database;
        $this->username = "admin";
        $this->password = "password";
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
    }

    public function popDB()
    {


        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $this->logs->console_log("Connected successfully");

        $sql_create_table = "CREATE TABLE IF NOT EXISTS Testing (
            name VARCHAR(100),
            email VARCHAR(100),
            number VARCHAR(20),
            UNIQUE(name, email, number)
            );
            ";
        if ($this->conn->query($sql_create_table) === TRUE) {
            for ($x = 0; $x <= 9; $x++) {

                $sql = "INSERT IGNORE INTO Testing (name, email, number) VALUES ('Test{$x}', 'test@testing.com{$x}', 'xxx-xxx-xxxx{$x}')";
                if (mysqli_query($this->conn, $sql)) {
                    $this->logs->console_log("Test row populated{$x}");
                } else {
                    $this->logs->console_log("Error: " . $sql . "<br>" . mysqli_error($this->conn));
                }
            }
        }
        // mysqli_close($conn);
    }
}
?>