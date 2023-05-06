<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard</title>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;600;700&family=Merriweather+Sans:wght@300;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!--<style>
            body {
                font-family: 'Merriweather Sans', sans-serif;
            }
        </style>-->
    </head>
    <body>
        @include('include.sidebar')
    </body>
</html>
