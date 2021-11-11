@extends('layout.main')

@section('title', 'All comics')

@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data d'uscita</th>
                <th scope="col">Tipologia</th>
                <th scope="col">|</th>
                <th scope="col" class="px-0">Azioni</th>
                <th scope="col" class="text-right">|</th>

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
                        <a href="{{route('comics.show', $comic['id'])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                    </td>
                    <td>
                        <a href="{{route('comics.edit', $comic['id'])}}"><button type="button" class="btn btn-warning">Modifica</button></a>                    
                    </td>
                    <td>
                        <form action="{{route('comics.destroy', $comic['id'])}}" method="POST">
                            @csrf
                            {{-- DELETE METHOD --}}
                            @method('DELETE')
                            <button type="SUBMIT" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr> 
            @endforeach
        
        </tbody>
    </table>
</div>
@endsection
