<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function gin(Request $req){
        if ($req->username == 'admin' && $req->password == 'bebas' && $req->kodeunik == 'LAL'){
            session(['login' => $req->username]);
            return redirect ('/');
        }
        return redirect('/login');
    }
}
