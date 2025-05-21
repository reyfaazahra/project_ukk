@extends('layouts.frontend')
@section('content')
    <section class="featured">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <article class="featured-post">
                        <div class="featured-post-content">
                            <div class="featured-post-author">
                                <img src="{{ asset('frontend/images/foto/pp.jpg') }}" alt=""
                                    style="width: 130px; height: auto;" />
                                <p>By <span>Reyfa Azahra</span></p>
                            </div>
                            <a href="single-blog.html" class="featured-post-title">
                                🍜 Temuin Makanan yang Cocok Sama Vibes Kamu Hari Ini
                            </a>
                            <ul class="featured-post-meta">
                                <li>
                                    <i class="fa fa-clock-o"></i>
                                    Mei 19, 2025 - 3 min read
                                </li>
                            </ul>
                        </div>
                        <div class="featured-post-thumb">
                            <img src="{{ asset('frontend/images/foto/sampul.jpg') }}" alt="feature-post-thumb"
                                style="width: 500px; height: auto; display: block; margin: 0 auto;" />

                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
