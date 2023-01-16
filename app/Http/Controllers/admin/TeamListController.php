<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TeamListController extends Controller
{
    public function index(){
        $Admin = User::paginate(7);
        return view("teamlist",compact('Admin'));
    }
}
