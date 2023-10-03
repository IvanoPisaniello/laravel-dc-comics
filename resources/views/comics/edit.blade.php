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
    <div class="container">
        
        <div class="container py-5">
           
            <form action="{{ route('comics.update', $comics->id)}}" method="POST">
                @csrf()
                @method("PUT")
      
                <div class="mb-3">
                    <label class="form-labal">Titolo</label>
                    <input type="text" class="form-control" @error('title') is-invalid @enderror name="title" value="{{old('title', $comics->title)}}">
                    @error('title')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-labal">Descrizione</label>
                    <textarea class="form-control" @error('description') is-invalid @enderror name="description">{{old('description', $comics->description)}}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-labal">Link immagine</label>
                    <input type="text" class="form-control" @error('thumb') is-invalid @enderror name="thumb" value="{{old('thumb', $comics->thumb)}}">
                    @error('thumb')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-labal">Prezzo</label>
                    <input type="number" class="form-control" @error('price') is-invalid @enderror name="price" value="{{old('price', $comics->price)}}">
                    @error('price')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-labal">Serie</label>
                    <input type="text" class="form-control" @error('series') is-invalid @enderror name="series" value="{{old('series', $comics->series)}}">
                    @error('series')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-labal">Data di uscita</label>
                    <input type="date" class="form-control" @error('sale_date') is-invalid @enderror name="sale_date" value="{{old('sale_date', $comics->sale_date)}}">
                    @error('sales_date')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-labal">Tipo</label>
                    <input type="text" class="form-control" @error('type') is-invalid @enderror name="type" value="{{old('type', $comics->type)}}">
                    @error('type')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-labal">Disegnatori</label>
                    <input type="text" class="form-control" @error('artists') is-invalid @enderror name="artists" value="{{old('artists', $comics->artists)}}">
                    @error('artists')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-labal">Scrittori</label>
                    <input type="text" class="form-control" @error('writers') is-invalid @enderror name="writers" value="{{old('writers', $comics->writers)}}">
                    @error('writers')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Salva</button>
                <a class="btn btn-primary" href="{{ route('comics.index') }}">Indietro</a>
            </form>
           
        </div>
        
    </div>
</body>
</html>