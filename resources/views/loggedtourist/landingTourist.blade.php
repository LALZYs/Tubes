

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TripKUY</title>


    <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/css/loggedtourist.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <ul style="background-color: #2c2534;" class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">


            <!-- Sidebar - Brand -->
            <div class="sidebar-header d-flex justify-content-left align-items-center px-3 py-4">
                <img
                    class="rounded-pill img-fluid"
                    width="65"
                    src="/img/undraw_profile.svg"
                    alt="">
                <div class="ms-2">
                <h5 class="fs-6 mb-0">
                    <a class="text-decoration-none" href="{{route('loggedrist')}}">{{Session::get('username');}}</a>
                </h5>
                </div>
            </div>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Heading -->
            <div class="sidebar-heading">
               Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pilihan Tempat Pariwisata</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{ url('tourist/DestinasiPariwisata') }}">Tampilkan Semua</a>
                    </div>
                </div>
            </li>





            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="{{route('loggedrist')}}" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Session::get('username');}}</span>
                                <img class="img-profile rounded-circle" src="/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{route('profiletourist')}}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                @yield('content')

                                <div id="parallax-world-of-ugg">
                
                <section>
                    <div class="title">
                    <h3>Let's do some</h3>
                    <h1>TripKUY</h1>
                    </div>
                </section>
                
                <section>
                    <div class="parallax-one">
                        <h2>Bali</h2>
                    </div>
                </section>
                
                <section>
                    <div class="block">
                    <p><span class="first-character sc">B</span>Bali adalah pulau yang sangat indah dengan panjang garis pantai sekitar 633,35 km. Di Pulau Bali terdapat gunung berapi, sungai-sungai, dan danau. Keberadaan gunung berapi memberikan kesuburan tanah untuk usaha pertanian. Gunung berapi di Pulau Bali adalah Gunung Batur dan Gunung Agung.</p>
                    <p class="line-break margin-top-10"></p>
                    <p class="margin-top-10">Bali memang memiliki banyak hal yang ditonjolkan seperti keindahan alamnya mulai dari pantai, sawah terasering, pegunungan dan juga danaunya, merupakan objek wisata unggulan yang selalu diminati oleh wisatawan, apalagi sekarang warga juga lebih kreatif untuk menciptakan tempat-tempat wisata baru yang tampil kekinian dan instagramable, dan sangat diminati oleh mereka yang suka hunting foto maupun yang gemar foto selfie. Selain itu Bali memiliki berbagai budaya seni dan tradisi unik yang menjadi daya tarik sendiri bagi wisatawan. Bali memiliki destinasi parawisata paling menonjol yaitu pantai. Bali memiliki pantai - pantai yang memiliki keindahan tiada tara, sehingga banyak tourist dalam negeri dan tourist luar negeri yang berdatangan ke Bali untuk menikmati keindahan alamnya. </p>
                    </div>
                </section>
                
                <section>
                    <div class="parallax-two">
                    <h2>Jakarta</h2>
                    </div>
                </section>
                
                <section>
                    <div class="block">
                    <p><span class="first-character ny">J</span>Daerah Khusus Ibukota Jakarta (DKI Jakarta) adalah ibu kota negara dan kota terbesar di Indonesia. Jakarta merupakan satu-satunya kota di Indonesia yang memiliki status setingkat provinsi. Jakarta terletak di pesisir bagian barat laut Pulau Jawa.</p>
                    <p class="line-break margin-top-10"></p>
                    <p class="margin-top-10">Jakarta merupakan salah satu kota di Indonesia yang menjadi destinasi favorit bagi wisatawan domestik maupun mancanegara. Banyak sekali pilihan tempat wisata di Jakarta yang bisa dituju saat liburan, khususnya wisata sejarah. Berbagai objek wisata menarik seperti wisata budaya, wisata kuliner, wisata religi, hingga wisata alam pun bisa ditemui di Kota Metropolitan ini.</p>
                    </div>
                </section>
                
                <section>
                    <div class="parallax-three">
                    <h2>Bandung</h2>
                    </div>
                </section>
                
                <section>
                    <div class="block">
                    <p><span class="first-character atw">B</span>Bandung adalah Ibukota provinsi dari Jawa Barat. Kota ini terkenal dengan hawanya yang sejuk dan dikelilingi oleh pegunungan. Pada zaman dahulu Bandung dijuluki sebagai Parijs van Java (Paris dari Jawa).</p>
                    <p class="line-break margin-top-10"></p>
                    <p class="margin-top-10">Kota Bandung adalah salah satu kota terbesar yang ada di Indonesia. Kota ini juga dijuluki sebagai “Paris Van Java” atau kota Paris-nya Jawa. Karena semua hal ada di Bandung. Kota ini juga memiliki tata kota yang apik dan fasilitas yang memadai untuk para pelancong, baik yang berasal dari dalam negeri maupun wisatawan luar negeri.

Kota ini tidak hanya dijuluki sebagai kota metropolitan, tetapi juga kota dengan banyak tempat wisata yang menyenangkan. Daerahnya juga menyimpan berbagai keindahan alam yang sangat luar biasa. Ada banyak sekali tempat wisata di bandung, seperti taman kota, tempat peninggalan sejarah, wisata alam, danau dan lain nya.</p>
                    </div>
                </section>
                    
                </div>
                
                </div>

                </div>
                <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout -->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin logout ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> 
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
                </div>
                </div>
                </div>

                <!-- Bootstrap core JavaScript-->

                <script src="/vendor/jquery/jquery.min.js"></script>
                <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="/js/sb-admin-2.min.js"></script>

                @yield('scripts')

                </body>

                </html>