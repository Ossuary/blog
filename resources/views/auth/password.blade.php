@extends('layouts.default')

@section('title', 'Forgot my Password')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            {!! Form::open(['url' => 'password/email', 'method' => 'POST']) !!}

                {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}

                {!! Form::submit('Send Password Reset Link', ['class' => 'btn btn-primary btn-block']) !!}

            {!! Form::close() !!}




        </div>
    </div>

@endsection