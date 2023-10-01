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
    {{-- @include('partials.cards') --}}
    @if(isset($comic)) <!-- Verifica se è stata passata la variabile $comic -->
    @include('partials.show') <!-- Includi la vista "show.blade.php" se $comic è definito -->
@else
    @include('partials.cards') <!-- Altrimenti, includi il partial "cards" come di default -->
@endif
    @include('partials.lower_menu')
    @include('partials.footer')

  

</body>
</html>
