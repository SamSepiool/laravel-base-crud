@extends('layout.main')

@section('title', 'COMICS - HOME')

@section('content')

<table class="table">
    <thead>
      <tr>
            <th scope="col">id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Serie</th>
            <th scope="col">Data d'uscita</th>
            <th scope="col">Tipologia</th>
            <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        
        @foreach ($comics as $comic)
            <tr>
                <th scope="row">{{$comic['id']}}</th>
                <td>{{$comic['title']}}</td>
                <td>{{$comic['price']}}</td>
                <td>{{$comic['series']}}</td>
                <td>{{$comic['sale_date']}}</td>
                <td>{{$comic['type']}}</td>
                <td>

                </td>
            </tr> 
        @endforeach
    
    </tbody>
  </table>
@endsection
