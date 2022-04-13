<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarPariwisata;

class DaftarPariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DaftarPariwisata::all();
        return view('DaftarPariwisata.indextg',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DaftarPariwisata.createtg');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new DaftarPariwisata;
        $data->daerah=$request->daerah;
        $data->lokasi1=$request->lokasi1;
        $data->lokasi2=$request->lokasi2;
        $data->lokasi3=$request->lokasi3;
        $data->save();

        return redirect('tourguide/DaftarPariwisata/createtg')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=DaftarPariwisata::find($id);
        return view('DaftarPariwisata.showtg',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=DaftarPariwisata::find($id);
        return view('DaftarPariwisata.edittg',['data'=>$data]);
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
        $data=DaftarPariwisata::find($id);
        $data->daerah=$request->daerah;
        $data->lokasi1=$request->lokasi1;
        $data->lokasi2=$request->lokasi2;
        $data->lokasi3=$request->lokasi3;
        $data->save();

        return redirect('tourguide/DaftarPariwisata/')->with('success', 'Data berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DaftarPariwisata::where('id',$id)->delete();
        return redirect('tourguide/DaftarPariwisata')->with('success', 'Data berhasil di hapus.');
    }
}
