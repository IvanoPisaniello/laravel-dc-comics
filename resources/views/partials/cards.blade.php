



<div class="bg-dark">
<div class="container">
    <div class="row pt-4">
        @foreach ($comics as $comic)
        <div class="col-md-2">
            <div class="my-card bg-transparent">
                <a href="{{route ('comics.show', $comic->id)}}"><img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}"></a>
                
                <div class="card-body text-white d-flex flex-column">
                    <h5 class="my-card-title">{{ $comic->title }}</h5>
                    <div class="d-flex justify-content-center gap-2 pb-3" >
       
                        <a class="btn btn-success rounded-2" href="{{ route('comics.edit', $comic->id) }}">Modifica</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Elimina</button>
                          </form>
                      </div>
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
