@extends('layouts.default')

@section('title', 'Register')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open() !!}

                {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}

                {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}

                {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}

                {!! Form::label('password_confirmation', 'Confirm Password:', ['class' => 'control-label']) !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

                {!! Form::submit('Register', ['class' => 'btn btn-primary btn-block']) !!}

            {!! Form::close() !!}
        </div>
    </div>

@endsection