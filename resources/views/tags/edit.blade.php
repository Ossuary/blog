@extends('layouts.admin')

@section('title', 'Edit Tag')

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset 2">

                        {!!  Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => "PUT"]) !!}

                        <div class="form-group">
                            {!! Form::label('name', 'Title:', ['class' => 'control-label']) !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection