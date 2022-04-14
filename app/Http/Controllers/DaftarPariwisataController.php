<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarPariwisata;
use App\Models\TempatPariwisata;
use App\Models\Tourguide;

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
        // $user = Tourguide::first();
        $LokasiWisata=TempatPariwisata::all();
        return view('DaftarPariwisata.createtg',['LokasiWisata' =>$LokasiWisata]);
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
        $LokasiWisata=TempatPariwisata::all();
        $data=DaftarPariwisata::find($id);
        // dd($data);
        return view('DaftarPariwisata.edittg',['data'=>$data,'LokasiWisata' =>$LokasiWisata]);
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
