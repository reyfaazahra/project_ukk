@extends('layouts.frontend')

@section('content')
    <div class="container mt-5 text-dark">
        <h2>{{ $artikel->judul }}</h2>

        @if ($artikel->foto)
            <img src="{{ asset('storage/artikel/' . $artikel->foto) }}" width="1000" alt="{{ $artikel->judul }}">
        @endif
        <br>
        <p class="mt-3 text-dark">{!! $artikel->konten !!}</p>
        <br>
        <div style="text-align: right;">
            <button>
                <a href="{{ url('artikel') }}" style="text-decoration: none; color: inherit;">Kembali</a>
            </button>
        </div>


    </div>
@endsection
