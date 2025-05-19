@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- Column -->
            <div class="row">
                <!-- column -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Tambah Kategori</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Nama Kategori</label>

                                    <input type="text" class="form-control" @error('nama_kategori') is-invalid @enderror
                                        name="nama_kategori">

                                    @error('nama_kategori')
                                        <div class="invalid-fedback">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                            </form>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>

    <footer class="footer text-center">
        © 2021 Monster Admin by <a href="https://www.wrappixel.com/">wrappixel.com</a> Distributed By <a
            href="https://themewagon.com">ThemeWagon</a>
    </footer>

    </div>

    </div>

    <script src="{{ asset('admin/assets/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/dashboards/dashboard1.js') }}"></script>
@endsection
