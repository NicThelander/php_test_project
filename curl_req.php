<?php include("includes/a_config.php"); 
include("functions/curl_function.php");?>
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
        <?php
        $curl = new curl_function();
        $curl->curl_the_url('http://icanhazip.com/');
        ?>
        <h3>and also a curl to a json doc</h3>
        <?php
        $curl = new curl_function();
        $curl->curl_the_url_json('http://dummy.restapiexample.com/api/v1/employees');
        ?>
        <h3>And finally a post request to a template website(there are surprisingly few of these for test purposes)</h3>
        <?php
        $curl = new curl_function();
        $curl->post_with_curl('http://dummy.restapiexample.com/api/v1/create')
        ?>


    </div>

    <?php include("includes/footer.php"); ?>

</body>

</html>