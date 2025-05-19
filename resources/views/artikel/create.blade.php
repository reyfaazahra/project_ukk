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
                                    <h2>Tambah Artikel</h2>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('artikel.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="judul">Judul Artikel</label>
                                            <textarea name="judul" id="judul" class="form-control @error('judul') is-invalid @enderror">{{ old('judul') }}</textarea>
                                            @error('judul')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label>Konten Artikel</label><br>
                                            <textarea name="konten" id="" class="form-control"></textarea>
                                            @error('konten')
                                                <div class="invalid-fedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label>Nama Kategori</label><br>
                                            <select name="id_kategori" id="" class="from-control">
                                                @foreach ($kategori as $data)
                                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('konten')
                                                <div class="invalid-fedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label>Foto</label>
                                            <input type="file" class="form-control"
                                                @error('foto') is-invalid @enderror name="foto">
                                            @error('foto')
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
