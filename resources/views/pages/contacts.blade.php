@extends('layouts.default')

@section('title', 'Contacts')

@section('content')

    <div id="contacts-page">
        <div class="container-fluid">
            <div class="row">
                <header class="header" id="contacts-header" >
                    <div class="flex-aligned">
                        <h1 class="h1 header-title">{{ trans('language.contacts') }}</h1>
                        <h4 class="h4 header-sub-title">Blanditiis corporis id iusto laboriosam minima natus qui quos temporibus ullam. Ipsam, iusto laudantium.</h4>

                    </div>
                    <div class="scroll-down-icon">
                        <button type="button" class="header-button btn btn-link btn-lg">
                            <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                        </button>
                    </div>
                </header>
            </div>
        </div>
        @include('partials.contact-form')
    </div>
@endsection




