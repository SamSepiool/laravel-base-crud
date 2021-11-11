<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title', 'homepage')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

        @include('partials.header')
        <main>
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
        


        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>