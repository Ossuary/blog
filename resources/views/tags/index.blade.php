@extends('layouts.admin')

@section('title', 'All Tags')

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Tags</h1>
                        <hr>
                    </div>

                    <div class="col-md-8">

                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td><a href="{{ route('tags.show', $tag->id) }}">{{ $tag->name }}</a></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            {!! Form::open(['route' => 'tags.store']) !!}

                            <h2>New Tag</h2>

                            <div class="form-group">
                                {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'required' => '', 'maxlength' => 255]) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit('New Tag', ['class' => 'btn btn-success btn-lg btn-block']) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection