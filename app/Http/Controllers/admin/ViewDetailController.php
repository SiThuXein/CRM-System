<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class ViewDetailController extends Controller
{
    public function index($id){
        $customer = Customer::find($id);
        return view("detail",compact("customer"));
    }

    public function back(){
        return redirect()->back();
    }
}
