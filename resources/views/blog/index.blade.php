@extends('layouts.default')

@section('title', 'Blog')

@section('content')


    <div id="blog-page">
        <div class="container-fluid">
            <div class="row">
                <header class="header" id="blog-header">
                    <div class="flex-aligned">
                        <h1 class="h1">{{ trans('language.blog') }}</h1>
                        <h4 class="h4">Lorem ipsum dolor sit amet, adipisicing elit. <br> Esse fugit impedit in
                            inventore itaque, minima molestiae, natus neque obcaecati pariatur perferendis.</h4>
                        <a href="#" role="button" class="btn btn-lg btn-2 header-button">Read More</a>
                    </div>
                </header>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                </div>
            </div>

            @foreach($posts as $post)
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>{{ $post->title }}</h2>
                        <h5>Published: {{ date('M j, Y', strtotime($post->created_at)) }}</h5>

                        <p>{{ substr(strip_tags($post->body), 0, 255) }}{{ strlen(strip_tags($post->body)) > 255 ? '...' : "" }}</p>

                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-default btn-primary">Read More</a>
                        <hr>
                    </div>
                </div>
            @endforeach

            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        {!! $posts->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection