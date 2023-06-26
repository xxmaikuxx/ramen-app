<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class Store_informationController extends Controller
{
    //
    public function store_information() {
        return view('admin.store_information.index');
    }

    public function address() {
        $tag_id = "laravel";

        $url ="https://opendata.resas-portal.go.jp/api/v1/prefectures" . $tag_id;
        $method = "GET";

        $client = new Client();

        $response = $client->request($method, $url);

        $posts = $response->getBody();
        $posts = json_decode($posts, true);

        return view('address', ['posts' => $posts]);
    }
}
