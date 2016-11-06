@extends('layouts.default')

@section('title', 'Login')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

            <div class="form-group">
                {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <span>{!! Form::checkbox('remember') !!}{!! Form::label('remember', 'Remember me ', ['class' => 'control-label']) !!}</span>
                <span><a href="{{ url('password/email') }}"> Forgot your password?</a></span>
            </div>
                {!! Form::submit('Login', ['class' => 'btn btn-primary btn-block']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection