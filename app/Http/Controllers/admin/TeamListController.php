<?php

namespace App\Http\Controllers\admin;

use App\Exports\TeamListExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;

class TeamListController extends Controller
{
    public function index(){
        $Admin = User::paginate(7);
        return view("teamlist",compact('Admin'));
    }


}
