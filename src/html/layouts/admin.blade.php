<!doctype html>
<html lang="en">
    <head>
        @include('partials.admin-head')
    </head>
    <body>

        @include('partials.admin-navigation')

        @include('partials.messages')

        <div class="admin-content">

                @yield('content')

        </div>

        @include('partials.admin-scripts')
        @yield('scripts')
    </body>

</html>