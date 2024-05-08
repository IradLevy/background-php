<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="{{ URL::asset('css/index.css') }}" rel="stylesheet" />
    </head>
    <body>
        <div class='main'>
            <x-header></x-header>
            @yield('managerSummary')
        </div>
    </body>
</html>