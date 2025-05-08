<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Monsterlite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Monster admin lite design, Monster admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Monster Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Lapak Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/monster-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin/assets/images/favicon.png') }}">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/plugins/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/css/style.min.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('layouts.component.header')
        @include('layouts.component.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->

                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->

                    <!-- column -->
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent blogss -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                    <!-- Column -->
                    <div class="row">
                        <!-- column -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="card-title">Edit Artikel</h2>

                                    <div class="card-body">
                                        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST"
                                            enctype="multipart/form-data">

                                            @method('put')

                                            @csrf

                                            <div class="mb-3">

                                                <label>Judul Artikel</label>

                                                <input type="text" class="form-control"
                                                    @error('judul') is-invalid @enderror name="judul"
                                                    value="{{ $artikel->judul }}">

                                                @error('judul')
                                                    <div class="invalid-fedback">{{ $message }}</div>
                                                @enderror

                                            </div>

                                            <div class="mb-3">

                                                <label>Konten</label><br>

                                                <input type="text" class="form-control"
                                                    @error('konten') is-invalid @enderror name="konten"
                                                    value="{{ $artikel->konten }}">

                                                @error('konten')
                                                    <div class="invalid-fedback">{{ $message }}</div>
                                                @enderror

                                            </div>

                                            <div class="mb-3">

                                                <label>Kategori</label><br>

                                                <input type="text" class="form-control"
                                                    @error('nama_kategori') is-invalid @enderror name="nama_kategori"
                                                    value="{{ $artikel->nama_kategori }}">

                                                @error('kategori')
                                                    <div class="invalid-fedback">{{ $message }}</div>
                                                @enderror

                                            </div>

                                            <div class="form-group">
                                                <label class="form-label">Ganti Gambar</label><br>
                                                <img src="{{ asset('storage/artikel/' . $artikel->foto) }}"
                                                    alt=""
                                                    style="width: 120px; height: 120px; object-fit: cover;"
                                                    class="mb-2">
                                                <input type="file"
                                                    class="form-control @error('foto') is-invalid @enderror"
                                                    name="foto">
                                                @error('foto')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">

                                                <button type="submit" class="btn btn-success">Simpan</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->

                    <!-- Column -->
                </div>
                <!-- ============================================================== -->
                <!-- Recent blogss -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a> Distributed By <a
                    href="https://themewagon.com">ThemeWagon</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="{{ asset('admin/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/dashboards/dashboard1.js') }}"></script>
</body>

</html>
