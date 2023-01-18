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
        $user = User::all();
        return view("summaryActivities",compact(["user"]));
    }

    public function search_summary_activities(){
        $start_date = request()->start_date;
        $end_date = request()->end_date;
        $sale_person = request()->sale_person;
        $users = User::all();
        if(isset($start_date)){
            foreach($users as $u){
                $user = $u->customer()->whereBetween('created_at',[$start_date,$end_date])->get();
                return view("summaryActivities",compact(["user"]));
            }
          
        }
    }
}
