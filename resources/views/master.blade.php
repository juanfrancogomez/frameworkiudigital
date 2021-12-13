<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <title>Document</title>
    </head>
    <body>
        @include('dashboard.structure.navbar')
        <div class="container">
            <div class="jumbotrom">
                @include('dashboard.structure.status')
                @yield('content')
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>