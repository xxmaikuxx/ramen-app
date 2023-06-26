<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request) {
        $dir = 'sample';
        
        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->store('public/' . $dir, $file_name);

        return redirect('/');
    }
}
