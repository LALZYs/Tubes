<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempatPariwisata;
use Session;

class TempatPariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=TempatPariwisata::all();
        return view('tempatpariwisata.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tempatpariwisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // membuat model tempat pariwisata
        $data=new TempatPariwisata;
        // menerima data yang dibutuhkan sesuai yang admin inputkan
        $data->gambar=$request->file('gambar')-> store('gambar_pariwisata');
        $data->nama_tempat=$request->nama_tempat;
        $data->deskripsi=$request->deskripsi;
        $data->lokasi=$request->lokasi;
        $data->catering=$request->catering;
        $data->save();
        // mengembalikan pesan bahwa tempat pariwisata berhasil ditambahkan
        return redirect('admin/tempatpariwisata/create')->with('success', 'Data berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=TempatPariwisata::find($id);
        return view('tempatpariwisata.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data=TempatPariwisata::find($id);
        return view('tempatpariwisata.edit',['data'=>$data]);


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
        $data=TempatPariwisata::find($id);
        $data->gambar=$request->file('gambar')-> store('gambar_pariwisata');
        $data->nama_tempat=$request->nama_tempat;
        $data->deskripsi=$request->deskripsi;
        $data->lokasi=$request->lokasi;
        $data->catering=$request->catering;
        $data->save();

        return redirect('admin/tempatpariwisata/'.$id.'/edit')->with('success', 'Data berhasil di update.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TempatPariwisata::where('id',$id)->delete();
        return redirect('admin/tempatpariwisata')->with('success', 'Data berhasil di hapus.');

    }

    public function __construct(){

        if(!Session::has('username')){
           redirect('ladmin')->send();
        }
    }
}
