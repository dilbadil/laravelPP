<!DOCTYPE html>
<html ng-app="PPApp">
    <head>
        <title>Administration Page</title>
        @section('css')
        << HTML::style('css/admin.css') >>
        @show
    </head>
    <body>
        @yield('content')
    </body>
    @section('js')
    << HTML::script('js/admin.js') >>
    @show
</html>
