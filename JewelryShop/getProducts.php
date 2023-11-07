<?php


$curl = curl_init();

$key = "2V66IUGuU5xQluzHz9st726YhYEQP7sQhAGeqv8ZN9AE1WEjf9HVpQyOK465N7Hh";

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://dev.sellix.io/v1/products',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',

    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $key,
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>