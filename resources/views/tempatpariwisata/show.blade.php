@extends('loggedmin.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{url('admin/tempatpariwisata')}}" class="float-right btn btn-success btn-sm">Tampilkan Semua</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">                    
                    <table class="table table-bordered">
                        <tr>
                            <th>Nama Tempat</th>
                            <td>{{$data->nama_tempat}}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>{{$data->deskripsi}}</td>
                        </tr>
                        <tr>
                            <th>Lokasi</th>
                            <td>{{$data->lokasi}}</td>
                        </tr>
                        <tr>
                            <th>Tarif</th>
                            <td>{{$data->tarif}}</td>
                        </tr>
                        <tr>
                            <th>Catering</th>
                            <td>{{$data->catering}}</td>
                        </tr>
                        <tr>
                            <th>Tourguide</th>
                            <td>{{$data->tourguide}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
