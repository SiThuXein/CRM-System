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
        $customer = Customer::all();
        $user = User::all();
        $asg = Assign::all();
        if(isset($sale_person) && !isset($status) && !isset($date)){
                    $assign = Assign::where("user_id",$sale_person)->paginate(7);
                    return view("pipeline",compact(["assign","customer","user"]));
        }
        else if(isset($sale_person) && isset($status) && !isset($date)){
            foreach($asg as $a){
                if($a->user->id == $sale_person){
                    if($a->customer->status == $status){
                            $assign = Assign::where("user_id",$a->user->id)->where("customer_id",$a->customer->id)->paginate(7);
                            return view("pipeline",compact(["assign","customer","user"]));
                        }
                }
                                    
            }
        }
        else if(isset($sale_person) && isset($status) && isset($date)){
            foreach($asg as $a){
                if($a->user->id == $sale_person){
                    if($a->customer->status == $status){
                            $assign = Assign::where("assign_date",$date)->where("user_id",$a->user->id)->where("customer_id",$a->customer->id)->paginate(7);

                            return view("pipeline",compact(["assign","customer","user"]));
                        }
                }
                else{
                    return redirect()->back()->with("not_found","Result Not Found");
                }   
            }
        }
        else{
            return redirect()->back()->with("not_found","Result Not Found");
        }
     

    }


    public function activities_detail($id){
        $customer = Customer::find($id);
        $act = Activities::find($id);
        return view("activitiesDetail",compact(["customer","act"]));
    }

    public function close_account($id){
        $input1 =request()->input1;
        $input2 = request()->input2;
        $input3 = request()->input3;
        $input4 = request()->input4;
        $input5 = request()->input5;
        $input6 = request()->input6;
        $comment = request()->comment;

        Activities::where('id',$id)->update([
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
