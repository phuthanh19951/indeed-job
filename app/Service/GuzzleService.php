<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Guzzle
{
    protected $base_uri = 'http://localhost:8080/api/v1/';
    protected $client;

    function __construct(){
        $this->client = new Client([
            'base_uri' => $this->base_uri,
        ]);
    }

    function get($verb){
        $response = $this->client->request('GET', $verb);
        return $response->getBody()->getContents();
    }

    function post($verb, $body){
        $form_params = $body;
        $response = $this->client->request('POST', $verb, [
            'form_params' => $form_params
        ]);
        return $response->getBody()->getContents();
    }

    function put($verb, $body, $idItem){
        $form_params = $body;
        $response = $this->client->request('PUT', $verb.'/'.$idItem, [
            'form_params' => $form_params
        ]);
        return $response->getBody()->getContents();
    }
}
