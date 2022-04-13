@extends('loggedtour.halamantg')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Tempat Pariwisata
                    <a href="{{url('tourguide/DaftarPariwisata')}}" class="float-right btn btn-success btn-sm">Tampilkan Semua</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post", action="{{url('tourguide/DaftarPariwisata')}}">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Daerah</th>
                                <td><input name="daerah" type="text" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Lokasi1</th>
                                <td><textarea name="lokasi1" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <th>Lokasi2</th>
                                <td><textarea name="lokasi2" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <th>Lokasi3</th>
                                <td><textarea name="lokasi3" class="form-control"></textarea></td>
                            </tr>
                           
                            
                            <tr>
                                <td colspan="2" class="text-center">
                                    <input type="submit" class="btn btn-primary"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    
@endsection


