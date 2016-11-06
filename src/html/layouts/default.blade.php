<!doctype html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body>

        @include('partials.navigation')
        @include('partials.navbar-menu')
        @include('partials.navbar-language')

        <div class="content">
            @yield('content')
        </div>

        @include('partials.footer')

        @include('partials.scripts')
        @yield('scripts')

    </body>

</html>