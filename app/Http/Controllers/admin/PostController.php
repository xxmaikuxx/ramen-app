<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function store(Request $request){
        $post = new Post();
        $post->shop_name = $request->input('shop_name');
              
        return redirect()->route('store_information.index');
    }
}
