<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;

class ApiAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Admin::all();
        return response([
            'message'=>'success get all admin',
            'admin'=> $data
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
            'username' => 'required|unique:admins|max:255|min:6',
            'password' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'unique_code' => 'required'
        ]);

        if($validated -> fails()){
            return response([
                'message'=> $validated->errors(),
            ],401);
        };


        $data= Admin::create($request->all());
        return response([
            'message'=> 'success post admin',
            'admin'=> $data
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
        $data= Admin::find($id);
        return response([
            'message'=> 'success',
            'admin'=> $data
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
        $data= Admin::find($id);
        $validated = $request->validate([
            'username' => 'required|unique:admins|max:255',
            'password' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'unique_code' => 'required'
        ]);

        $data->update($request->all());
        return response([
            'message'=> 'success update admin',
            'admin'=> $data
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
        $data= Admin::find($id);
        $data->delete();
        return response([
            'message'=> 'success delete data',
            'admin'=> $data
        ],201);
    }
}
