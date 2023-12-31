




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
    <div class="show-container">
        <div class="blue-bar bg-primary p-2 d-flex justify-content-between">
            <a class="btn btn-success rounded-2" href="{{ route('comics.index') }}">Torna a Tutti i Comics</a>
            <a class="btn btn-success rounded-2" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline-block">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger">Elimina</button>
              </form>
        </div>
        <div class="container">
                  
         <img src="{{$comic->thumb}}" alt="" class="img-show">
         <div class="info-container">
            <h3 class="mt-5">{{$comic->title}}</h3>
            <div class="price-bar text-white bg-success p-3 d-flex justify-content-between">
                <p>US Price: ${{$comic->price}}</p>
                <p>AVAILABLE</p>
            </div>
            <p>{{$comic->description}}</p>
                    </div>
        </div>
        </div>
<div class="footer-info">
    <div class="container px-5">
        <div class="row">
            <div class="col-6 d-flex flex-column">
                <h5 class="border-bottom pb-3">Talent</h5>
                
                <div class="d-flex justify-content-between border-bottom p-3">
                    <p class="me-5">Art by:</p>
                    <p class="text-primary">{{$comic->artists }}</p>
                </div>
                
                <div class="d-flex justify-content-between p-3">
                    <p class="me-5">Written by:</p>
                    <p class="text-primary">{{$comic->writers }}</p>
                </div>
                
                
                
                
                
                
            </div>
            <div class="col-6">
                <h5>Specs</h5>
                <div class="d-flex justify-content-between border-bottom border-top p-3">
                    <p class="me-5">Series</p>
                    <h5 class="text-primary">{{  $comic->series }}</h5>
                </div>
                <div class="d-flex justify-content-between border-bottom border-top p-3">
                    <p class="me-5">U.S. Price</p>
                    <p>{{  $comic->price }}</p>
                </div>
                <div class="d-flex justify-content-between border-bottom border-top p-3">
                    <p class="me-5">On Sale Date</p>
                    <p>{{  $comic->sale_date }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
   
    @include('partials.lower_menu')
    @include('partials.footer')

  

</body>
</html>