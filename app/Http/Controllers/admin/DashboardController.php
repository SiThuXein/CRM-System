<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Complain;

class DashboardController extends Controller
{
    public function index(){
        $pending_customer = Customer::where("status","Pending")->get();
        $closed_customer = Customer::where("status","Closed")->get();
        $complain = Complain::all();
        return view("adminDashboard",compact(["pending_customer","closed_customer","complain"]));
    }
}
