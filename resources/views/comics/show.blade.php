@extends('layout.main')

@section('content')

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
                <h4 class="d-inline-block">DATA DI VENDITA:</h4> 
                {{$comic['sale_date']}}
            </li>
            <li class="list-group-item">
                <h4 class="d-inline-block">PREZZO:</h4> 
                {{$comic['price']}}
            </li>
            
            {{-- <li class="list-group-item">{{$comic['description']}}</li>
            <li class="list-group-item">{{$comic['series']}}</li>
            <li class="list-group-item">{{$comic['type']}}</li>
            <li class="list-group-item">{{$comic['sale_date']}}</li>
            <li class="list-group-item">{{$comic['price']}}</li> --}}
          </ul>
   
</div>
@endsection