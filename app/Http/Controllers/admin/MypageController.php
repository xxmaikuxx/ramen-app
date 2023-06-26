<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MypageController extends Controller
{
    //
    public function mypage() {
        return view('admin.mypage');
    }
}
