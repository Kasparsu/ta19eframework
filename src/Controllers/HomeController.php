<?php
namespace App\Controllers;


use GuzzleHttp\Client;

class HomeController {
    public function index() {
        $client = new Client(['verify'=> false]);
        $response = $client->get('https://rickandmortyapi.com/api/character/2');
        $char = json_decode($response->getBody()->getContents());
        var_dump($char->name);
    }

}