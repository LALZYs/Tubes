<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashtgController extends Controller
{
    public function __construct(){
       
        if(!Session::has('username')){
           redirect('ltourguide')->send();
        }
        
    }

    public function index(){
        return view('loggedtour.halamantg');
    }
}
