<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Activities;

class CustomerDetailController extends Controller
{
    public function index($id){
        $customer = Customer::find($id);
        return view("customerDetail",compact(["customer"]));
    }

    public function add_complain($id){
        $input1 =request()->input1;
        $input2 = request()->input2;
        $input3 = request()->input3;
        $input4 = request()->input4;
        $input5 = request()->input5;
        $input6 = request()->input6;
        $comment = request()->comment;

        Activities::create([
            "customer_id" => $id,
            "have_other_account" => $input1,
            "greet_the_customer" => $input2,
            "listen_and_ask" => $input3,
            "recommened_account" => $input4,
            "cross_sell" => $input5,
            "thanks_customer" => $input6,
            "comment" => $comment
        ]);

        return redirect()->back();
    }
}
