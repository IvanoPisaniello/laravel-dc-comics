{{-- @extends("layouts.public") --}}



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
   
    @include ('partials.header')
    @include ('partials.hero')
    @include('partials.cards')
    @include('partials.lower_menu')
    @include('partials.footer')

  

</body>
</html>
