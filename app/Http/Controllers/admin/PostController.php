<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function store(Request $request){

        dd($request);
        
        $post = new Post();
        $post->name = $request->input('name');
              
        return redirect()->route('store_information.index');
    }
}
