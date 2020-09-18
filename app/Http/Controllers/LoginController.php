<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function LoginView(){
        return view('users.loginpage');
    }
    public function ForgotPassword(){
        return view('users.forgotPassword');
    }
    public function login(Request $request){
        $name = $request->get('name');
        $email =  $request->get('email');
        $password = $request->get('password');
        $hashedPassword=Hash::make($password);
        $user = User::where('name', $name)->where('email',$email)->where('password', $password)->first();

        if (isset($user)){
            return view('products');
        }
        else{
            return 'kullanıcı bulunamadı';
        }
 }
}
