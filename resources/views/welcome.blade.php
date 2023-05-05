<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ischool</title>
    </head>
    <body>
    <div id="app">
        <header-component></header-component>
        <div class="max-w-7xl mx-auto pt-36 md:pt-40 px-3 h-full">
        </div>
    </div>
        @vite('resources/js/app.js')
    </body>
</html>
