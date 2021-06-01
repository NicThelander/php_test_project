
<?php
// require('./util/logs.php'); and $logs = new logs(); already
// in db_setup.php which is called before this so not needed
$servername = "localhost";
$database = "nicDB";
$username = "admin";
$password = "password";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$logs->console_log("Connected successfully");

$sql_create_table = "CREATE TABLE IF NOT EXISTS Testing (
    name VARCHAR(100),
    email VARCHAR(100),
    number VARCHAR(20),
    UNIQUE(name, email, number)
    );
    ";
if ($conn->query($sql_create_table) === TRUE) {
    for ($x = 0; $x < 10; $x++) {

        $sql = "INSERT IGNORE INTO Testing (name, email, number) VALUES ('Test{$x}', 'test@testing.com{$x}', 'xxx-xxx-xxxx{$x}')";
        if (mysqli_query($conn, $sql)) {
            $logs->console_log("Test row populated{$x}");
        } else {
            $logs->console_log("Error: " . $sql . "<br>" . mysqli_error($conn));
        }
    }
}
mysqli_close($conn);
?>