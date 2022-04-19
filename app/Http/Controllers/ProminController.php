<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Admin;
use Session;
use Illuminate\Support\Facades\DB;
class ProminController extends Controller
{
    public function __construct(){

        if(!Session::has('username')){
           redirect('ladmin')->send();
        }
    }
    public function index(){

        $data=DB::table('admins')
            ->where('username','=',Session::get('username'))
            ->first();
        return view('loggedmin.profile',[
            'data'=> $data
        ]);
    }
}
