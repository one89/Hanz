<@extends('layouts.web') @php use Illuminate\Support\Str; @endphp @section('content') <div role="main" class="main">
    <section
        class="page-header page-header-modern page-header-background page-header-background-md custom-bg-color-grey-1 mb-0"
        style="background-image: url(img/demos/education/backgrounds/page-header.jpg); background-position: 100% 100%;">
        <div class="container">
            <div class="row mt-5">
                <div class="col align-self-center p-static text-center">
                    <h1 class="font-weight-bold text-color-secondary text-10">Blog</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row py-3">
            <div class="col">
                <ul class="breadcrumb d-block">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-lg-8 mb-5 mb-lg-0">
                @foreach($posts as $post)
                    <article class="mb-5">
                        <div class="card bg-transparent border-0 custom-border-radius-1">
                            <div class="card-body p-0 z-index-1">
                                <a href="{{ url('/blog/' . $post->slug) }}">
                                    <img class="card-img-top border-radius-0 mb-2" src="{{ asset($post->image) }}"
                                        alt="Card Image">
                                </a>
                                <p class="text-uppercase text-color-default text-1 my-2">
                                    <time pubdate
                                        datetime="{{ $post->date }}">{{ \Carbon\Carbon::parse($post->date)->format('d M Y') }}</time>
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    {{ $post->comments }} Comments
                                    <span class="opacity-3 d-inline-block px-2">|</span>
                                    {{ $post->author }}
                                </p>
                                <div class="card-body p-0">
                                    <h4 class="card-title text-5 font-weight-semi-bold pb-1 mb-2">
                                        <a class="text-color-secondary text-color-hover-primary text-decoration-none text-4"
                                            href="{{ url('/blog/' . $post->slug) }}">{{ $post->title }}</a>
                                    </h4>
                                    <p class="card-text mb-2">{{ Str::limit(strip_tags($post->content), 120) }}</p>
                                    <a href="{{ url('/blog/' . $post->slug) }}"
                                        class="text-decoration-none custom-link-hover-effects">
                                        <span
                                            class="btn btn-link font-weight-semi-bold text-decoration-none text-2 ps-0 text-uppercase">
                                            Read More
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach

                {{ $posts->links() }}
            </div>
            <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 mb-5">
                {{-- Sidebar content here --}}
            </div>
        </div>
    </div>
    </div>
@endsection