<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\GuzzleService;

class HomeController extends Controller
{
    public function index(){
        // $client = new Guzzle();
        // $data = $client->put('navigation', ['name' => 'abcd', 'path' => 'abcdwwww', 'parentId' => '3'], '5bbe1afddd0a661cc765ca3b');
        // print_r($data);
        return view('client.page.home');
    }
}
