<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/23/2018
 * Time: 10:47 AM
 */

namespace App;
use GuzzleHttp;

class Utils
{

    public static function external_get_request($url)
    {
        $client = new GuzzleHttp\Client();
        $res = $client->request('GET', '$url');
        return $res;
    }
}