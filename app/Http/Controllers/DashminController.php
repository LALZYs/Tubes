<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashminController extends Controller
{
   
    public function __construct(){
       
        if(!Session::has('username')){
           redirect('ladmin')->send();
        }
        
    }

    public function index(){
        return view('loggedmin.layout');
    }
}
