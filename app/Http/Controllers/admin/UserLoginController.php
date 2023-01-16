<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserLoginController extends Controller
{
    public function index(){
        return view("adminLogin");
    }

    public function login(){
        $username = request()->username;
        $password = request()->password;

        $User = User::all();
        foreach($User as $user){
            if($username==$user->username && $password==$user->password){
                session()->put("username",$username);
                return redirect("/admin/dashboard");
            }
            else{
                return redirect()->back()->with("loginError","invalid username and password");
            }
        }


    }
}
