@extends('loggedtour.halamantg')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{url('tourguide/DaftarPariwisata')}}" class="float-right btn btn-success btn-sm">Tampilkan Semua</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                @if(isset($data))                  
                    <table class="table table-bordered">
                        <tr>
                            <th>Daerah</th>
                            <td>{{$data->daerah}}</td>
                        </tr>
                        <tr>
                            <th>Lokasi1</th>
                            <td>{{$data->lokasi1}}</td>
                        </tr>
                        <tr>
                            <th>Lokasi2</th>
                            <td>{{$data->lokasi2}}</td>
                        </tr>
                        <tr>
                            <th>Lokasi3</th>
                            <td>{{$data->lokasi3}}</td>
                        </tr>
            
                    </table>
                    @endif
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
