@extends('layouts.main')
@section('content')
    <main class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h1>All posts</h1>
                    </section>
                    <section class="foi-page-section pt-0">
                        <div class="row">
                            @foreach($posts as $post)
                                <div class="col-md-12">
                                    <article class="blog-post media">
                                        <div class="blog-post-thumbnail-wrapper">
                                            <a href="{{route('posts.slug', $post->id)}}"><img src="{{$post->image}}" alt="blog" width="155px" class="blog-post-thumbnail mr-md-3"></a>
                                        </div>
                                        <div class="media-body">
                                            <p class="blog-post-date">{{$post->created_at}}</p>
                                            <h5 class="blog-post-title">{{$post->title}}</h5>
                                            <p class="blog-post-excerpt">{{$post->content}}</p>
                                        </div>
                                    </article>
                                </div>
                            @endforeach
                        </div>
                        <div>{{$posts->links()}}</div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
