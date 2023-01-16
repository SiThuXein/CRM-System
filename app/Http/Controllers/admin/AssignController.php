<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assign;
use App\Models\Customer;
use App\Models\User;

class AssignController extends Controller
{
    public function index(){
        $customer = Customer::all();
        $user = User::all();
        return view("assign",compact(["customer","user"]));
    }

    public function create(){
        $customer_id = request()->customer_id;
        $user_id = request()->staff_id;
        $date = request()->date;
        $remark = request()->remark;

        Assign::create([
            'customer_id' => $customer_id,
            'user_id' => $user_id,
            'assign_date' => $date,
            'remark' => $remark
        ]);

        return redirect("admin/dashboard/customer/pending");
    }

   
}
