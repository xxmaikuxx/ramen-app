<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;

class Store_listController extends Controller
{
    public function store_list(Request $request){
       $stores = Store::latest()->get();
       
       return view ('admin.storelist', compact('stores'));
}
}

