<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complain;
use App\Models\User;

class ComplainController extends Controller
{
    public function index(){
        $complains = Complain::paginate(7);
        return view("complain",compact(['complains']));
    }

    public function add(){
        return view("addComplain");
    }

    public function create(){
        $customer_id = request()->customer_id;
        $phone = request()->phone;
        $complain = request()->complain;
        $created_by = request()->created_by;

        $users = User::all();
        foreach($users as $user){
            if($user->username==$created_by && $user->crm_role=="sale"){
                Complain::create([
                    "customer_id" => $customer_id,
                    "phone" => $phone,
                    "complain" => $complain,
                    "created_by" => $created_by
                ]); 

                return redirect("/admin/dashboard/complain");
            }
        }

        return redirect()->back()->with("user","user doesn't exit");

    

    }
    
}
