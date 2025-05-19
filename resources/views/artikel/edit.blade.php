@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
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
                                        <input type="text" class="form-control" @error('judul') is-invalid @enderror
                                            name="judul" value="{{ $artikel->judul }}">
                                        @error('judul')
                                            <div class="invalid-fedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label>Konten</label><br>
                                        <input type="text" class="form-control" @error('konten') is-invalid @enderror
                                            name="konten" value="{{ $artikel->konten }}">
                                        @error('konten')
                                            <div class="invalid-fedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_kategori">Kategori</label><br>
                                        <select name="id_kategori"
                                            class="form-control @error('id_kategori') is-invalid @enderror">
                                            <option value="">-- Pilih Kategori --</option>
                                            @foreach ($kategori as $kat)
                                                <option value="{{ $kat->id }}"
                                                    {{ $artikel->id_kategori == $kat->id ? 'selected' : '' }}>
                                                    {{ $kat->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('id_kategori')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Ganti Gambar</label><br>
                                        <img src="{{ asset('storage/artikel/' . $artikel->foto) }}" alt=""
                                            style="width: 120px; height: 120px; object-fit: cover;" class="mb-2">
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror"
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
