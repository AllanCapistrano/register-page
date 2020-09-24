<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register</title>

        <link rel="stylesheet" type="text/css" href="{{ url('/css/styles.css') }}">
    </head>
    <body>
        <main>
          <div class="title">
            @yield('title')
          </div>

          <div class="container">
            @yield('container')
          </div>
        </main>
    </body>
</html>
