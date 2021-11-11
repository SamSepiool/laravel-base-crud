@extends('layout.main')

@section('content')

<div class="container">
    <div class="card-group">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{$comic['thumb']}}" alt="Card image cap">
        </div>
    
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <h4 class="d-inline-block">TITOLO:</h4> 
                    {{$comic['title']}}
                </li>
                <li class="list-group-item">
                    <h4 class="d-inline-block">DESCRIZIONE:</h4> 
                    {{$comic['description']}}
                </li>
                <li class="list-group-item">
                    <h4 class="d-inline-block">SERIE:</h4> 
                    {{$comic['series']}}
                </li>
                <li class="list-group-item">
                    <h4 class="d-inline-block">TIPOLOGIA:</h4> 
                    {{$comic['type']}}
                </li>
                <li class="list-group-item">
                    <h4 class="d-inline-block">DATA D'USCITA:</h4> 
                    {{$comic['sale_date']}}
                </li>
                <li class="list-group-item">
                    <h4 class="d-inline-block">PREZZO:</h4> 
                    {{$comic['price']}}
                </li>
                {{-- ACTIONS --}}
                <li class="list-group-item">
                    
                    <a href="{{route('comics.edit', $comic['id'])}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                    
                    <form class="d-inline-block" action="{{route('comics.destroy', $comic['id'])}}" method="POST" onsubmit="return confirm('Are you sure to delete this comic?')">
                        @csrf
                        {{-- DELETE METHOD --}}
                        @method('DELETE')
                        <button type="SUBMIT" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection