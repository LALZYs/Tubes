<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashtouristController extends Controller
{

    public function __construct(){

        if(!Session::has('username')){
           redirect('ltourist')->send();
        }

    }

    public function index(){
        return view('loggedtourist.landingTourist');
    }
}
