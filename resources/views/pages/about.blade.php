@extends('layouts.default')

@section('title', 'About Me')

@section('content')

    <div id="about-page">
        <div class="container-fluid">
            <div class="row">
                <header class="header" id="about-header">
                    <div class="flex-aligned">
                        <h1 class="h1 header-title">{{ trans('language.about') }}</h1>
                        <h4 class="h4 header-sub-title">Lorem ipsum dolor sit amet, adipisicing elit. <br> Esse fugit
                            impedit in inventore itaque.</h4>
                        <a href="#" role="button" class="btn btn-lg btn-2 header-button">Read More</a>
                    </div>
                </header>
            </div>
        </div>

        @include('partials.contact-form')
    </div>

@endsection