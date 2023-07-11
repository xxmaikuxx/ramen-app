<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Stores;
use App\Models\Store_vacation;
use App\Models\Store_facilities;
use App\Models\Store_images;

class Store_informationController extends Controller
{
    //
    public function store_information() {
        return view('admin.store_information.index');
    }

    public function store(Request $request){
        $stores = new Stores();
        $store_vacation = new Store_vacation();
        $store_facilities = new Store_facilities();
        $store_images = new Store_images();

        $stores->name = $request->input('name');
        $stores->city = $request->input('city');
        $stores->address1 = $request->input('address1');
        $stores->address2 = $request->input('address2');
        $stores->price = $request->input('price');
        $stores->start_time = $request->input('start_time');
        $stores->end_time = $request->input('end_time');
        $stores->rest_start_time = $request->input('rest_start_time');
        $stores->rest_end_time = $request->input('rest_end_time');
        $stores->menu = $request->input('menu');
        $stores->introduction = $request->input('introduction');
        $stores->url = $request->input('url');
        $stores->tel = $request->input('tel');
        $store_images->store_images = $request->input('store_images');
        $store_vacation->store_vacation = $request->input('store_vacation');
        $store_facilities->store_facilities = $request->input('store_facilities');
        
        $stores->save();

        return redirect()->route('store_information.index');
    }

}
