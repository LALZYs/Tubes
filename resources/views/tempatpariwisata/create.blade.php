@extends('loggedmin.layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Tempat Pariwisata
                    <a href="{{url('admin/tempatpariwisata')}}" class="float-right btn btn-success btn-sm">Tampilkan Semua</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif
                <div class="table-responsive">
                    <form method="post", action="{{url('admin/tempatpariwisata')}}" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <div class="form-group">
                                <th>Gambar</th>
                                <td>
                                    <input name="gambar" type="file" class="form-control"/>
                                    @error('gambar')
                                        <small class ="error" style="color:red">{{ $message }}</small>
                                     @enderror
                                </td>


                            </div>
                            <tr>
                                <th>Nama</th>
                                <td>
                                    <textarea name="nama_tempat" class="form-control"></textarea>
                                    @error('nama_tempat')
                                        <small class ="error" style="color:red">{{ $message }}</small>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <td>
                                    <textarea name="deskripsi" class="form-control"></textarea>
                                    @error('deskripsi')
                                        <small class ="error" style="color:red">{{ $message }}</small>
                                    @enderror
                                </td>

                            </tr>
                            <tr>
                                <th>Lokasi</th>
                                <td><textarea name="lokasi" class="form-control"></textarea>
                                    @error('lokasi')
                                        <small class ="error" style="color:red">{{ $message }}</small>
                                    @enderror
                                </td>

                            </tr>
                            <tr>
                                <th>Catering</th>
                                <td>
                                    <textarea name="catering" class="form-control"></textarea>
                                    @error('catering')
                                        <small class ="error" style="color:red">{{ $message }}</small>
                                    @enderror
                                </td>

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


