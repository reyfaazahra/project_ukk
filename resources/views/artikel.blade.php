@extends('layouts.frontend')
@section('content')
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-section-title">
                        <h2>Artikel</h2>
                        <p>Jejak Rasa: Menyusuri Warisan Kuliner yang Tak Lekang oleh Waktu</p>
                    </div>
                    @foreach ($artikel as $data)
                        <article class="blog-post">
                            <div class="blog-post-thumb">
                                <div
                                    style="width: 300px; height: 200px; overflow: hidden; border-radius: 8px; margin: 0 auto;">
                                    <img src="{{ asset('storage/artikel/' . $data->foto) }}" alt="gambar artikel"
                                        style="width: 100%; height: 100%; object-fit: cover;">
                                </div>

                            </div>
                            <div class="blog-post-content">
                                <h2>{{ $data->judul }}</h2>
                                <div class="blog-post-title">
                                    <a href="single-blog.html">{{ $data->nama_kategori }}</a>
                                </div>
                                <div class="blog-post-meta">
                                    <ul>
                                        <li>By <a href="about.html">Reyfa Azahra</a></li>
                                        <li>
                                            <i class="fa fa-clock-o"></i>
                                            Mei 19, 2025 - 2 min
                                        </li>
                                    </ul>
                                </div>

                                <a href="{{ route('detail.single', $data->id)}}" class="blog-post-action">selengkapnya <i
                                        class="fa fa-angle-right"></i></a>
                                <body>
                                    @yield('content')
                                </body>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
