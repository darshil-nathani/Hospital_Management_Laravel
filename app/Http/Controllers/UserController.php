<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
            'hospital_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'address' => 'required',
            'contect_number' => 'required|min:10|numeric',
        ]);

        $user = User::create($data);

        if($user){
            return redirect()->route('login');
        }
    }

    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($data)){
            return redirect()->route('dashboard');
        }
    }

    public function logout(){
            Auth::logout();
            return view('user.login');
    }

    public function index()
    {

    }

    public function dashboardPage(){
        return view('admin.dashboard');
    }

    public function doctor(){

    }
}
