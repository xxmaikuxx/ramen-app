<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Store_vacation;
use App\Models\Store_image;
use App\Models\Store_facility;
use Illuminate\Support\Facades\Auth;

class Store_informationController extends Controller
{
    //
    public function store_information() {
        return view('admin.store_information.index');
    }

    public function store(Request $request){
        $store = new Store();

        $store->name = $request->input('name');
        $store->admin_id = 1;
        $store->city = $request->input('city');
        $store->address1 = $request->input('address1');
        $store->address2 = $request->input('address2');
        $store->price = $request->input('price');
        $store->start_time = $request->input('start_time');
        $store->end_time = $request->input('end_time');
        $store->rest_start_time = $request->input('rest_start_time');
        $store->rest_end_time = $request->input('rest_end_time');
        $store->menu = $request->input('menu');
        $store->introduction = $request->input('introduction');
        $store->url = $request->input('url');
        $store->tel = $request->input('tel');
        $store->save();

        $store_id = $store->id;
        
        $store_vacation = new Store_vacation();
        $store_vacation->store_id = $store_id;
        $store_vacation->day_of_week = $request->imput('store_vacation');
        $store_vacation->save();

        $store_facility = new Store_facility();
        $store_facility->store_id = $store_id;
        $store_facility->facility = $request->input('store_facilities');
        $store_facility->save();

        return redirect()->route('store_information.index');
    }

    public function upload(Request $request)
    {
        $store_image = new Store_image();
        $store_image->image_url = $request->file('store_images')->store('/public');
        $store_image->save();

        return redirect()->route('store_information.index');
    }

}

