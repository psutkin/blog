@extends('layouts.main')
@section('content')
    <main class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h1>Blog</h1>
                    </section>
                    <section class="foi-page-section pt-0">
                        <div class="row">
                            @foreach($posts as $post)
                            <div class="col-md-6">
                                <article class="blog-post media">
                                    <div class="blog-post-thumbnail-wrapper">
                                        <img src="{{$post->image}}" alt="blog" width="155px" class="blog-post-thumbnail mr-md-3">
                                    </div>
                                    <div class="media-body">
                                        <p class="blog-post-date">{{$post->created_at}}</p>
                                        <h5 class="blog-post-title">{{$post->title}}</h5>
                                        <p class="blog-post-excerpt">{{\Illuminate\Support\Str::limit($post->content, 100, '...')}}</p>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
