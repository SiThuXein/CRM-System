<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserLoginController extends Controller
{
    public function index(){
        return view("adminLogin");
    }

    public function login(){
        $username = request()->username;
        $password = request()->password;
        $role1 = "manager";
        $role2 = "admin";
        $users = User::all();
        foreach($users as $user){
            if($user->role==$role1){
                if($username==$user->username && $password==$user->password){
                    $User = session()->put("username",$user->username);
                    $user = User::where("username",$user->username)->first();
                    Auth::login($user);
                    return redirect("/admin/dashboard");
                }
            }
            else if($user->role==$role2 && $user->role!=$role1){
                if($username==$user->username && $password==$user->password){
                    session()->put("username",$user->username);
                    $user = User::where("username",$user->username)->first();
                    Auth::login($user);
                    return redirect("/admin/panel");
                }
            }
            else if($user->role!=$role1){
                if($username==$user->username && $password==$user->password){
                    session()->put("username",$user->username);
                    $user = User::where("username",$user->username)->first();
                    Auth::login($user);
                    return redirect("/admin/user/pipeline");
                } 
            }
            else{
                return redirect()->back()->with("loginError","Invalid");
            }
      
        }


    }
}
