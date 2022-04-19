<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Tourguide;

class ProtgController extends Controller
{
    public function __construct(){

        if(!Session::has('username')){
           redirect('ltourguide')->send();
        }
    }
    public function index(){

        $data=DB::table('tourguides')
            ->where('username','=',Session::get('username'))
            ->first();
        return view('loggedtour.protg',[
            'data'=> $data
        ]);
    }
}
