<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function pending_customer(){
        $customers = Customer::where("status","Pending")->paginate(7);
        return view("customer",compact('customers'));
    }
    public function closed_customer(){
        $customers = Customer::where("status","closed")->paginate(7);
        return view("customer",compact('customers'));
    }
}
