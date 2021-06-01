<?php
	include("includes/a_config.php");
	include("Model/db_setup.php");

	$conn = new mysqli("localhost", "root", "password");
	$db_setup = new db_setup(); 
	$db_setup->setup($conn);
	
	$conn2 = new mysqli("localhost", "root", "password", "nicDB");
	$db_setup->populate($conn2);

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