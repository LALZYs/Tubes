@extends('loggedtourist.landingTourist')
@section('content')
   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">{{ $data->nama_tempat }}
        <a href="{{url('tourist/DestinasiPariwisata')}}" class="float-right btn btn-success btn-sm">Kembali</a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>id</th>
                    <td>{{$data->id}}</td>
                </tr>
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
                <tr>
                    <td colspan="2" class="text-center">
                     <input type="submit" class="btn btn-success btn-sm"/>
                     </td>
                </tr>
            </table>
        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->
@endsection
