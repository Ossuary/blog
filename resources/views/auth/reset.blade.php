@extends('layouts.default')

@section('title', 'Reset Password')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['url' => 'password/reset', 'method' => 'POST']) !!}

                {!! Form::hidden('token', $token) !!}

                {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}

                {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}

                {!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'control-label']) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

                {!! Form::submit('Reset Password', ['class' => 'btn btn-primary btn-block']) !!}

            {!! Form::close() !!}

        </div>
    </div>

@endsection