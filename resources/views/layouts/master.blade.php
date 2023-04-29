<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ischool</title>
</head>
    <body>
    <div id="app">
        <loader-component>
            <master-layout>
                <freelesson-component></freelesson-component>
                <advantages-component :advantages="{{ json_encode($advantages) }}"></advantages-component>
            </master-layout>
        </loader-component>
    </div>
    @vite('resources/js/app.js')
    </body>
</html>
