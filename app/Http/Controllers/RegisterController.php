<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

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

        
        Customer::create([
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
            "status" => "Pending"
        ]);

        return redirect()->back()->with('info','Created Account');
    }
}
