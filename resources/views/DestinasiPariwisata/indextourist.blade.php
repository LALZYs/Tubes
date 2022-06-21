@extends('loggedtourist.landingTourist')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
           
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th>Daerah</th>
                              
                                <th>Lokasi1</th>
                                <th>Lokasi2</th>
                                <th>Lokasi3</th>
                                <th>Tarif</th>
                                <th>Pesan</th>

                            </tr>
                            
                            
                        </tfoot>
                        <tbody>
                            @if ($data)
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->daerah }}</td>
                                        <td>{{ $d->lokasi1 }}</td>
                                        <td>{{ $d->lokasi2 }}</td>
                                        <td>{{ $d->lokasi3 }}</td>
                                        <td>{{ $d->tarif }}</td>
                                        <td>   
                                        <a href="{{ url('tourist/DestinasiPariwisata/' . $d->id) }}" class="btn btn-info btn-sm">
                                                <i class="fa fa-eye"></i></a>
                                        </td>
                                        
                                    
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@section('scripts')
    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Page level plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>
@endsection
@endsection
