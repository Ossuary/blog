@extends('layouts.default')
<?php $titleTag = htmlspecialchars($post->title); ?>

@section('title', "$titleTag")

@section('content')

    <div class="container-fluid no-gutters">
        <div class="row no-gutters">
            <img class="post-image" src="{{ asset('images/' . $post->image) }}" alt="">
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1>{{ $post->title }}</h1>
                <p>{!! $post->body !!}</p>
                <hr>
                <p>Posted In: {{ $post->category->name }} By: {{ Auth::user()->name }}</p>

                <div class="tags">
                    @foreach ($post->tags as $tag)

                        <span class="label label-default">{{ $tag->name }}</span>

                    @endforeach
                </div>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h3 class="comments-title"><span class="glyphicon glyphicon-comment"></span> {{ $post->comments()->count() }} Comments</h3>
                @foreach($post->comments as $comment)
                    <div class="comment ">
                        <div class="author-info">
                            <img src="{!! "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=retro" !!}" class="author-image">
                            <div class="author-name">
                                <h4>{!! $comment->name !!} </h4>
                                <p class="author-time">
                                    {!! date('F nS, Y - G:i',(strtotime($comment->created_at))) !!}
                                </p>

                            </div>

                        </div>
                        <div class="comment-content">
                            {!! $comment->comment !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="row">

            <hr>
            <div id="comment-form" class="col-md-8 col-md-offset-2">
                {!! Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) !!}

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::label('comment', 'Comment:', ['class' => 'control-label']) !!}
                            {!! Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Add Comment', ['class' => 'btn btn-success btn-block']) !!}
                        </div>
                    </div>
                </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>

@endsection