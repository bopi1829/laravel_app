<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    </head>
    <body>
        @component('layouts.components.navbar')
            @slot('name')
                Laravel 
            @endslot
        @endcomponent
        <div class="content">
            <div class="row">
                <div class="col-sm">
                    @section('left')
                        Layout left
                    @show
                </div>

                <div class="col-sm">
                    @yield('content')
                </div>                                   
            </div>
        </div>
    </body>
</html>
