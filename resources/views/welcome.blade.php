<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Google Login</title>
        @include('includes.styles')
    </head>

    <body class="img js-fullheight" style="background-image: url(images/bg.jpg);">

        @include('login')

        @include('includes.scripts')

    </body>

</html>
