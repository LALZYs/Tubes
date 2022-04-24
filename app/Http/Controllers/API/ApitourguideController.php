<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tourguide;
use Illuminate\Support\Facades\Validator;

class ApitourguideController extends Controller
{
    public function index()
    {
        $data=Tourguide::all();
        return response([
            'message'=>'success get all tourguide',
            'tourguide'=> $data
        ],201);
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
    public function store(Request $request)
    {
        $validated = Validator::make($request->all(),[
            'username' => 'required|unique:tourguides|max:255|min:6',
            'password' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'asal_kota' => 'required'
        ]);

        if($validated -> fails()){
            return response([
                'message'=> $validated->errors(),
            ],401);
        };


        $data= Tourguide::create($request->all());
        return response([
            'message'=> 'success post tourguide',
            'tourguide'=> $data
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Tourguide::find($id);
        return response([
            'message'=> 'success',
            'tourguide'=> $data
        ],201);
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
        $data= Tourguide::find($id);
        $validated = $request->validate([
            'username' => 'required|unique:tourguides|max:255',
            'password' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'asal_kota' => 'required'
        ]);

        $data->update($request->all());
        return response([
            'message'=> 'success update tourguide',
            'tourguide'=> $data
        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Tourguide::find($id);
        $data->delete();
        return response([
            'message'=> 'success delete data',
            'tourguide'=> $data
        ],201);
    }
}
