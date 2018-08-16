
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @include('home_components.menu')
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>