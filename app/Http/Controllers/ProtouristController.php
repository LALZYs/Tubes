<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Tourist;

class ProtouristController extends Controller
{
    public function __construct(){

        if(!Session::has('username')){
           redirect('ltourist')->send();
        }
    }
    public function index(){

        $data=DB::table('tourists')
            ->where('username','=',Session::get('username'))
            ->first();
        return view('loggedtourist.profiletourist',[
            'data'=> $data
        ]);
    }
}
