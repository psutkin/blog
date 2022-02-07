@extends('layouts.main')
@section('content')
    <main class="page-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <section class="page-header">
                        <h1>Slug</h1>
                    </section>
                    <section class="foi-page-section pt-0">
                        <div class="row">
                                <div class="col-md-8">
                                    <article class="blog-post media">
                                        <div class="media-body">
                                            <p class="blog-post-date">{{$slug->created_at}}</p>
                                            <h5 class="blog-post-title">{{$slug->title}}</h5>
                                            <p class="blog-post-excerpt">{{$slug->content}}</p>
                                        </div>
                                    </article>
                                </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
@endsection
