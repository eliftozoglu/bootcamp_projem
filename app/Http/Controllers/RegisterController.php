<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function RegisterView(){
        return view('users.registerpage');
    }
    public function Register(Request $request){
        $data =$request ->all(); //datayı çekmek için
        $password = $request->get('password');

        DB::table('users')->insert([
            'name'=>$request->get('name'),
            'email'=>$request->get('email'),
            'password'=>Hash::make($password), //tek yönlü şifreleme yapar
        ]);

        return 'Kayıt başarıyla tamamlandı!';
    }

}
