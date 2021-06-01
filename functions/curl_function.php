<?php
class curl_function
// This function will perform a basic curl on the url passed to it
{

    function curl_the_url($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        $result = curl_exec($ch);

        echo $result;

        var_dump($result);
    }
}
