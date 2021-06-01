<?php
	include("includes/a_config.php");
	include("Model/db_setup.php");
	include("Model/db_populate.php");

	$conn = new mysqli("localhost", "admin", "password");

	$db_setup = new db_setup($conn, "nicDB"); // setup needs it for CREATE DATABASE
	$db_setup->setup();
	$db_setup->populate();

	// this you can do inline in the doc:
	$result = $conn->query($sql_req);
    while ($row = $result->fetch_assoc()) {
         echo "name: " . $row["name"] . ", email: " . $row["email"] . ", number: " . $row["number"] . "<br>";
        }
	
	$db_populate = new db_populate($conn, "nicDB"); 
	$db_populate->popDB();
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

	<?php include("includes/design-top.php"); ?>
	<?php include("includes/navigation.php"); ?>

	<div class="container" id="main-content">
		<h2>Nic's Test website</h2>
		<?php echo "Welcome to my landing page!
		I've set up the pages with the requirements you list,
		you can access them through the links above." ?>
	</div>

	<?php include("includes/footer.php"); ?>

</body>

</html>