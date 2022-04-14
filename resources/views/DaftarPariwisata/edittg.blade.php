@extends('loggedtour.halamantg')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Tempat Pariwisata
                    <a href="{{url('tourguide/DaftarPariwisata')}}" class="float-right btn btn-success btn-sm">Tampilkan Semua</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form method="post" , action="{{ url('tourguide/DaftarPariwisata/'.$data->id) }}">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Daerah</th>
                                <td><input value="{{$data->daerah}}" name="daerah" type="text" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Lokasi1</th>
                                <td>
                                @if(isset($LokasiWisata))
                                    <select name="lokasi1" class="form-select" aria-label="Default select example">
                                        <option selected>{{ $data->lokasi1 }}</option>
                                        @foreach ($LokasiWisata as $l)
                                        <option value="{{ $l->nama_tempat }}">{{ $l->nama_tempat }}</option>
                                        @endforeach
                                    </select>
                                @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Lokasi2</th>
                                <td>
                                @if(isset($LokasiWisata))
                                    <select name="lokasi2" class="form-select" aria-label="Default select example">
                                        <option selected>{{ $data->lokasi2 }}</option>
                                        @foreach ($LokasiWisata as $l)
                                        <option value="{{ $l->nama_tempat }}">{{ $l->nama_tempat }}</option>
                                        @endforeach
                            
                                    </select>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Lokasi3</th>
                                <td>
                                @if(isset($LokasiWisata))
                                    <select name="lokasi3" class="form-select" aria-label="Default select example">
                                        <option selected>{{$data->lokasi3}}</option>
                                        @foreach ($LokasiWisata as $l)
                                        <option value="{{ $l->nama_tempat }}">{{ $l->nama_tempat }}</option>
                                        @endforeach
                            
                                    </select>
                                    @endif
                                </td>
                            </tr>
                         
                            <tr>
                                <td colspan="2" class="text-center">
                                    <input type="submit" class="btn btn-primary" />
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
