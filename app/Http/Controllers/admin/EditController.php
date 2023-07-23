<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Store_vacation;
use App\Models\Store_image;
use App\Models\Store_facility;
use Illuminate\Support\Facades\Auth;

class EditController extends Controller
{
   public function edit(Store $store) {
    return view('admin.edit', compact('store'));
   }
}
