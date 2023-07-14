<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
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
        $store->admin_id = Auth::id();
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

        return redirect()->route('store_information.index');
    }

}
