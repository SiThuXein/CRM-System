<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Assign;
use App\Models\Activities;

class ActivitiesController extends Controller
{
    public function activities(){
        $assign = Assign::paginate(7);
        $customer = Customer::all();
        $user = User::all();
        return view("activities",compact(["assign","customer","user"]));
    }

    public function search(){
        $sale_person = request()->sale_person;
        $status = request()->status;
        $date = request()->date;
        
        $asg = Assign::all();
        foreach($asg as $a){
            if($a->user->username == $sale_person){
            if($a->customer->status == $status){
                if($a->assign_date == $date){
                    $customer = Customer::all();
                    $user = User::all();
                    $assign = Assign::where("id",$a->id)->paginate(7);

                    return view("activities",compact(["assign","customer","user"]));
                    }
                }
            
            
            else{
                return redirect()->back()->with("not_found","Result Not Found");
            }
        }   
        }

    }


    public function activities_detail($id){
        $customer = Customer::find($id);
        return view("activitiesDetail",compact(["customer"]));
    }

    public function close_account($id){
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

        Customer::where('id',$id)->update([
            "status" => "Closed"
        ]);

        return redirect("/admin/dashboard/activities");
    }
}
