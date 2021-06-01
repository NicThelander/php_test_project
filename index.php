<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<?php include("includes/head-tag-contents.php"); ?>
	<?php include("includes/../Model/db_setup.php");
	$db_setup = new db_setup();
	$db_setup->setUpDB();
	?>
	<?php include("includes/../Model/db_populate.php");
	$db_populate = new db_populate("nicDB");
	$db_populate->popDB();
	?>

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