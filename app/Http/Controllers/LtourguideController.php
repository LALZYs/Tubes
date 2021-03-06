<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tourguide;
use Session;
use Illuminate\Support\Facades\Auth;

class LtourguideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $respons= Tourguide::where('username','=',$req->username)->first();
        if($respons){
            if($respons->username== $req->username && $respons->password== $req->password && $respons->asal_kota== $req->asalkota)
            {
                Session::put('username' , $respons->username);
                Session::put('asalkota' ,$respons->asal_kota);

                return redirect('/logtg');
            }

        }
        return redirect()->back()->with('gagal',"Login Gagal !");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->flush();
        return redirect('/');
    }
}
