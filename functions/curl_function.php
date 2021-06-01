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

    function curl_the_url_json($url){
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $curl_data = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($curl_data);
        $user_data = $result->data;
        $user_data = array_slice($user_data, 0, 4);
        foreach ($user_data as $user) {
	        echo "name: ".$user->employee_name;
	        echo "<br />";
        }
    }

    function post_with_curl($url){
        $data = array('name'=>'NicTest','salary'=>'45000', 'age' => '32');
        $json_data = json_encode($data);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($ch, CURL_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response  = curl_exec($ch);
        curl_close($ch);
        echo ($response);
    }

}
