<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            header,
            ul {
                display: flex;
            }
            header {
                background-color: aliceblue;
                padding: 10px;
            }
            header ul li {
                padding: 0 10px;
            }
            .container {
                width: 75%;
                margin: auto;
            }
            .container table {
                margin: auto;
            }
            td {
                padding: 10px;
                border-bottom: 1px solid lightblue;
            }
            .pagination {
                justify-content: center;
                margin-top: 60px;
            }
            
            ul {
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        @include('partials.header')

        @yield('content')
    </body>
</html>