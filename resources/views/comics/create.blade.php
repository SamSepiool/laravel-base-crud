@extends('layout.main')

@section('content')
<div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        <h1 class="text-center">AGGIUNGI UN FUMETTO</h1>
        @csrf
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title"  name="title" placeholder="Inserisci il titolo">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea  class="form-control" id="description" rows="5" name="description" placeholder="Inserisci la descrizione"> </textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Img</label>
            <input type="text" class="form-control" id="thumb"  name="thumb" placeholder="Inserisci il link all'immagine di copertina">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price"  name="price" placeholder="Inserisci il prezzo">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series"  name="series" placeholder="Inserisci a che serie appartiene">
        </div>
        <div class="form-group">
            <label for="sale_date">Data d'uscita</label>
            <input type="date" class="form-control" id="sale_date"  name="sale_date" placeholder="Inserisci la data d'uscita">
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control" id="type"  name="type" placeholder="Inserisci la tipologia">
        </div>
        <button type="submit" class="btn btn-primary">Aggiungi</button>
    </form>    
</div>
@endsection

