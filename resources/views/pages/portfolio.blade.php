@extends('layouts.default')

@section('title', 'Portfolio')

@section('content')

    <div id="portfolio-page">
        <div class="container-fluid">
            <div class="row">
                <header class="header" id="portfolio-header">
                    <div class="flex-aligned">
                        <h1 class="h1 header-title">{{ trans('language.portfolio') }}</h1>
                        <h4 class="h4 header-sub-title">Lorem ipsum dolor sit amet, adipisicing elit.<br>Esse fugit impedit in inventore itaque, minima molestiae.</h4>
                        <a href="javascript:void(0)" role="button" class="header-button btn btn-lg btn-3">See More</a>
                    </div>
                </header>
            </div>
        </div>

        @include('partials.arqal-case-study')
        @include('partials.sweet-case-study')
        @include('partials.prdesign-case-study')

        @include('partials.contact-form')
    </div>

@endsection