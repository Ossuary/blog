@extends('layouts.admin')

@section('title', 'Edit Comment')

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <h1>Edit Comment</h1>

                <div class="row">

                    <div class="col-md-8 col-md-offset-2">

                        {!! Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'disabled' => 'disabled']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('comment', 'Comment:', ['class' => 'control-label']) !!}
                            {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Update Comment', ['class' => 'btn btn-success btn-lg btn-block']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection