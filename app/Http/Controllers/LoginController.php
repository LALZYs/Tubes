<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    $user = DB::table('user')->where('username', 'John')->first();
 
    return $user->unique_code;
    $unique_code = $request->unique_code;
    }
    public function validate(){
        
    }
}
