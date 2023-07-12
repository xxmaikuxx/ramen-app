<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stores;



class Store_informationController extends Controller
{
    //
    public function store_information() {
        return view('admin.store_information.index');
    }

    public function store(Request $request){
        $stores = new Stores();

        $stores->name = $request->input('name');
        
        $stores->save();

        return redirect()->route('store_information.index');
    }

}
