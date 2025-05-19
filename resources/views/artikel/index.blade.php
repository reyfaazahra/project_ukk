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
                            <h2 class="card-title">Artikel</h2>
                            <a href="{{ route('artikel.create') }}" class="btn btn-outline-primary btn-sm"
                                style="float: right">Tambah</a>
                            <div class="card-body">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="table-responsive">
                                    <table class="table user-table no-wrap">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Konten</th>
                                                <th scope="col">Nama Kategori</th>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @foreach ($artikel as $data)
                                                <tr>
                                                    <td scope="row">{{ $no++ }}</td>
                                                    <td scope="row">{{ $data->judul }}</td>
                                                    <td scope="row">{{ Str::limit($data->konten, 10) }}</td>
                                                    <td scope="row">{{ $data->kategori->nama_kategori }}</td>
                                                    <td>
                                                        <img src="{{ asset('storage/artikel/' . $data->foto) }}"
                                                            alt="" style="width: 100px; height: 100px">
                                                    </td>
                                                    <th>
                                                        <form action="{{ route('artikel.destroy', $data->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="{{ route('artikel.show', $data->id) }}"
                                                                class="btn btn-success">Show</a>
                                                            <a href="{{ route('artikel.edit', $data->id) }}"
                                                                class="btn btn-warning">Edit</a>
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
                                                        </form>
                                                    </th>
                                                </tr>
                                            @endforeach
                                        </tbody>
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
