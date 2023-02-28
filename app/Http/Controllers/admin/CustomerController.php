<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::where("status","New")->paginate(7);
        return view("customer",compact('customers'));
    }
    public function search(){
        $name = request()->name;
        $customers = Customer::where("status","New")->where('full_name','like',$name.'%')->paginate(7);
        return view("customer",compact('customers'));
    }
 
}
