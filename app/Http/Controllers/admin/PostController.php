<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function store(Request $request){
        return redirect()->route('admin.store_information.index');
    }
}
