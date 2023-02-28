<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view("register");
    }

    public function create(){
        $full_name = request()->full_name;
        $father_name = request()->father_name;
        $nrc = request()->nrc;
        $type = request()->type;
        $phone = request()->phone;
        $dob = request()->date_of_birth;
        $edu = request()->education;
        $gender = request()->gender;
        $occupation = request()->occupation;
        $addr = request()->address;
        $username = request()->user;
        $date = request()->start_date;
        $user = User::where('username',$username)->first();

        
        $customer = Customer::create([
            "user_id" => $user->id,
            "full_name" => $full_name,
            "father_name" => $father_name,
            "nrc" => $nrc,
            "type" => $type,
            "phone" => $phone,
            "date_of_birth" => $dob,
            "education" => $edu,
            "gender" => $gender,
            "occupation" => $occupation,
            "address" => $addr,
            "status" => "New",
            "start_date" => date('Y-m-d')
        ]);
        
        if($customer){
            return redirect('/admin/dashboard/customers')->with('success','New Customer Successfully Created');
        }else{
            return redirect()->back()->with('failed','Failed New Customer Created');
        }

    }
}
