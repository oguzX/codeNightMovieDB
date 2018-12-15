<?php

class rmoreController extends controller
{
    function indexAction($movieId)
    {
        $curlInit = curl_init("https://api.themoviedb.org/3/movie/".$movieId[0]."?api_key=f7dea668cf80a25035af6e29f6e05c5e");
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, 'false');
        $dataApiRaw = curl_exec($curlInit);
        curl_close($curlInit);

        $dataApi = json_decode($dataApiRaw);
        $data['lng_icon'] = array("en" => IMGDIR . '/icon/en.png');
        $data['dataMovie'] = $dataApi;
        self::render('rmore', $data);
    }
}

?>