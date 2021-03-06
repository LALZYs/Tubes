<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatPariwisata;
use App\Models\DestinasiPariwisata;
use App\Models\DaftarPariwisata;
use App\Models\Tourist;
use Session;

class DestinasiPariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DaftarPariwisata::all();
        return view('DestinasiPariwisata.indextourist',['data'=>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=DaftarPariwisata::find($id);
        return view('DestinasiPariwisata.showtourist',['data'=>$data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function __construct(){
       
        if(!Session::has('username')){
           redirect('ltourist')->send();
        }
    }
}
