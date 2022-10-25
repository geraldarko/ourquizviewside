<?php

//initialization of the function 
function api_getdata(){
    $curl = curl_init();


    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($curl, CURLOPT_URL, "https://ourquiz.herokuapp.com/actions/api.php");

    //excecution 
    $result = curl_exec($curl);

    curl_close($curl);

    return (json_decode($result));
}

?>