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
        $stores->city = $request->input('city');
        $stores->address1 = $request->input('address1');
        $stores->address2 = $request->input('address2');
        $stores->price = $request->input('price');
        $stores->start_time = $request->input('start_time');
        $stores->end_time = $request->input('end_time');
        $stores->rest_start_time = $request->input('rest_start_time');
        $stores->rest_end_time = $request->input('rest_end_time');
        $stores->store_vacation = $request->input('store_vacation');
        $stores->menu = $request->input('menu');
        $stores->introduction = $request->input('introduction');
        $stores->store_facilities = $request->input('store_facilities');
        $stores->url = $request->input('url');
        $stores->tel = $request->input('tel');
        $stores->store_images = $request->input('store_images');
        $stores->save();

        return redirect()->route('store_information.index');
    }

}
