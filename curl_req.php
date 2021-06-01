<?php include("includes/a_config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <?php include("includes/head-tag-contents.php"); ?>
</head>

<body>

    <?php include("includes/design-top.php"); ?>
    <?php include("includes/navigation.php"); ?>

    <div class="container" id="main-content">
        <h2>Curl Request</h2>
        <p>My curl Request page, it also makes a pull from <a href="http://icanhazip.com/">http://icanhazip.com/</a>,
            but it uses a php curl request instead of a javascript XMLHttpRequest.</p>
        <?php include("functions/curl_function.php");
        $curl = new curl_function();
        $curl->curl_the_url('http://icanhazip.com/');
        ?>

    </div>

    <?php include("includes/footer.php"); ?>

</body>

</html>