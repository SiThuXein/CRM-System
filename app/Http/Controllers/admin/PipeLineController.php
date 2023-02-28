<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Assign;
use App\Models\Customer;
use App\Models\User;

class PipeLineController extends Controller
{
    public function index(){
        $assign = Assign::paginate(7);
        $customer = Customer::all();
        $user = User::all();
        return view("pipeline",compact(["assign","customer","user"]));
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
                $user_id = $a->user->id;
                $customer_status = $a->customer->status;
                if($user_id == $sale_person){
                    if($customer_status == $status){
                        $assign = Assign::where("user_id",$user_id)->where("customer_id",$a->customer->id)->paginate(7);
                        return view("pipeline",compact(["assign","customer","user"]));
                        }
                }
                else{
                    return redirect()->back()->with("not_found","Result Not Found");
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

    public function pipeline_detail($id){
        $customer = Customer::find($id);
        return view("pipelineDetail",compact(["customer"]));
    }



}
