<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class SearchController extends Controller
{
    public function search_pending_customer(){
        $name = request()->name;
        $customers = Customer::where("full_name","like",$name."%")->where("status","Pending")->paginate(7);
        return view("customer",compact("customers"));
    }
}
