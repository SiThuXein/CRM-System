<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Assign;

class SummaryActivitiesController extends Controller
{
    public function summary_activities(){
        $user = User::where("crm_role","sale")->get();
        $pending_customer = 0;
        $close_customer = 0;
        $total_customer = 0;
        foreach($user as $u){
            foreach($u->customer as $c){
                if($c->status == "Pending"){
                    $pending_customer++;                    
                }
                else{
                    $close_customer++;
                }
            }
            $total_customer = $pending_customer + $close_customer;
        }
        return view("summaryActivities",[
            'pending_customer' => $pending_customer,
            'close_customer' => $close_customer,
            'total_customer' => $total_customer,
            'user' => $user
        ]);
    }

    public function search_summary_activities(){
        $date = request()->date;
        $sale_person = request()->sale_person;
        $users = User::all();
        $pending_customer = 0;
        $close_customer = 0;
        $total_customer = 0;
        if(isset($date)){
            foreach($users as $u){
                foreach($u->customer as $c){
                    if($c->start_date == $date && $c->status == "Pending"){
                        $pending_customer++;
                    }
                    else if($c->start_date == $date && $c->status == "Closed"){
                        $close_customer++;
                    }
                    // $user = $c->whereBetween('start_date',[$start_date,$end_date])->get();
                }
                $total_customer = $pending_customer + $close_customer; 
            }

            return view("searchSummary",[
                'pending_customer' => $pending_customer,
                'close_customer' => $close_customer,
                'total_customer' => $total_customer,
                'user' => $users
            ]);
        }
        else{
            return redirect()->back()->with('not_found','Result Not Found');
        }
    }
}
