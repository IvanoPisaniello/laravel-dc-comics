



<div class="bg-dark">
<div class="container">
    <div class="row pt-4">
        @foreach ($comics as $comic)
        <div class="col-md-2">
            <div class="card bg-transparent">
                <a href="{{route ('comics.show', $comic->id)}}"><img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}"></a>
                
                <div class="card-body text-white">
                    <h5 class="card-title">{{ $comic->title }}</h5>
                
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center pb-3">
       
        <a class="btn btn-primary px-4 py-0 rounded-0" href="{{ route('comics.create') }}">Aggiungi Nuovo</a>
      </div>
      
</div>
</div>
