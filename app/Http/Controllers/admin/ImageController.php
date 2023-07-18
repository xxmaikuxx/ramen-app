<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store_image;


class ImageController extends Controller
{
    public function store(Request $request) {
    
    $path = $request->file('store_images')->store('public');
    $store_url = basename($path);

    return redirect()->route('store_information.index');
    }
}
