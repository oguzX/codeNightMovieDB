<?php
$curlInit = curl_init("https://api.themoviedb.org/3/trending/movie/week?api_key=f7dea668cf80a25035af6e29f6e05c5e");

curl_setopt($curlInit,CURLOPT_RETURNTRANSFER,'false');

$dataRaw = curl_exec($curlInit);

header('Content-Type: application/json');
curl_close($curlInit);



$data = json_decode($dataRaw);
print_r($data);
