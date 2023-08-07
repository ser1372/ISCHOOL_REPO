<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ischool</title>
    <link rel="icon" href="/storage/logoicon.jpg" type="image/x-icon">
</head>
<body>
<div id="app">
    <loader-component>
        <master-layout
                :telegram="{{json_encode($telegram)}}"
                :email="{{json_encode($email)}}"
                :telephone="{{json_encode($telephone)}}"
        >
            <freelesson-component></freelesson-component>
            <advantages-component :advantages="{{ json_encode($advantages) }}"></advantages-component>
            <video-component :video="{{ json_encode($video) }}"></video-component>
            <club-component></club-component>
            <price-component :prices="{{ json_encode($prices) }}"></price-component>
            <reviews-component :reviews="{{ json_encode($reviews) }}"></reviews-component>
            <learn-component :learn="{{ json_encode($learn) }}"></learn-component>
            <speak-free-component></speak-free-component>
            <cooperation-component :link="{{json_encode($link)}}"></cooperation-component>
        </master-layout>
    </loader-component>
</div>
@vite('resources/js/app.js')
@include('components.google')
</body>
</html>
