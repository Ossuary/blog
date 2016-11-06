@extends('layouts.default')

@section('title', 'Home')

@section('content')

    <div id="home-page">
        <div class="container-fluid">
            <div class="row">
                <header class="header" id="home-header" >
                    <div class="flex-aligned">
                        <h1 class="h1 header-title">{{ trans('language.home') }}</h1>
                        <h4 class="h4 header-sub-title">Lorem ipsum dolor sit amet, adipisicing elit. <br> Minima molestiae, natus neque obcaecati pariatur perferendis.</h4>
                        <a href="#" role="button" class="btn btn-lg btn-2 header-button">Read More</a>
                    </div>
                </header>
            </div>
        </div>
        @include('partials.contact-form')
   </div>

@endsection