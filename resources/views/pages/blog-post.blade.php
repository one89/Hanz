@extends('layouts.web')

@section('content')
    <div role="main" class="main">

        <section
            class="page-header page-header-modern page-header-background page-header-background-md custom-bg-color-grey-1 mb-0"
            style="background-image: url(img/demos/education/backgrounds/page-header.jpg); background-position: 100% 100%;">
            <div class="container">
                <div class="row mt-5">
                    <div class="col align-self-center p-static text-center">
                        <h1 class="font-weight-bold text-color-secondary text-10">{{ $post->title }}</h1>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row py-3">
                <div class="col">
                    <ul class="breadcrumb d-block">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                        <li class="active">{{ $post->title }}</li>
                    </ul>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-8 mb-5 mb-lg-0">

                    <article>
                        <div class="card border-0">
                            <div class="card-body z-index-1 p-0">
                                <p class="text-uppercase text-1 mb-3 text-color-default">
                                    <time pubdate
                                        datetime="{{ $post->date }}">{{ \Carbon\Carbon::parse($post->date)->format('d M Y') }}</time>
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    {{ $post->comments }} Comments
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    {{ $post->author }}
                                </p>

                                <div class="post-image pb-4">
                                    <img class="card-img-top custom-border-radius-1" src="{{ asset($post->image) }}"
                                        alt="Card Image">
                                </div>

                                <div class="card-body p-0">
                                    {!! $post->content !!}
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
                <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 mb-5">
                    {{-- Sidebar content here --}}
                </div>
            </div>
        </div>

    </div>
@endsection