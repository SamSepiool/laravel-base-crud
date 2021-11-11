@extends('layout.main')

@section('content')
<div class="container">
    <form action="{{route('comics.update', $comic['id'])}}" method="POST">
        <h1 class="text-center">MODIFICA {{$comic['title']}} (id:{{$comic['id']}})</h1>
        @csrf
    
        {{-- PUT METHOD --}}
        @method('PUT')
    
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title"  name="title" placeholder="Inserisci il titolo" value="{{old('title') ? old('title') : $comic['title']}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea  class="form-control" id="description" rows="5" name="description" placeholder="Inserisci la descrizione">{{old('description') ? old('description') : $comic['description']}}</textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Img</label>
            <input type="text" class="form-control" id="thumb"  name="thumb" placeholder="Inserisci il link all'immagine di copertina" value="{{old('thumb') ? old('thumb') : $comic['thumb']}}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price"  name="price" placeholder="Inserisci il prezzo" value="{{old('price') ? old('price') : $comic['price']}}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series"  name="series" placeholder="Inserisci a che serie appartiene" value="{{old('series') ? old('series') : $comic['series']}}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data d'uscita</label>
            <input type="date" class="form-control" id="sale_date"  name="sale_date" placeholder="Inserisci la data d'uscita" value="{{old('sale_date') ? old('sale_date') : $comic['sale_date']}}">
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control" id="type"  name="type" placeholder="Inserisci la tipologia" value="{{old('type') ? old('type') : $comic['type']}}">
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>    
</div>
@endsection

