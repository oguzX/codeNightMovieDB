<?php
/**
 * Created by PhpStorm.
 * User: Zug
 * Date: 16.12.2018
 * Time: 01:40
 */

class searchController extends controller
{
    function movieAction(){
        $curlInit = curl_init("https://api.themoviedb.org/3/search/movie?api_key=f7dea668cf80a25035af6e29f6e05c5e&query=".$_GET['moviename']."");
        curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, 'false');
        $dataApiRaw = curl_exec($curlInit);
        curl_close($curlInit);

        $dataApi = json_decode($dataApiRaw);

        $data["movies"] = isset($dataApi->results)?$dataApi->results:[];
        $data['link'] = URL.'/rmore/index';


        self::render('index', $data);
    }
}