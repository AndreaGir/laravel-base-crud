@extends('app')

@section('mainCreate')

<div class="input">
    <h2>Titolo</h2>
    <input type="text" placeholder="" value="{{ old('title')}}">
    <h2>Descrizione</h2>
    <input type="text" placeholder="" value="{{ old('description')}}">
    <h2>Serie</h2>
    <input type="text" placeholder="" value="{{ old('series')}}">
    <h2>Data uscita</h2>
    <input type="text" placeholder="" value="{{ old('sale_date')}}">
    <h2>Prezzo</h2>
    <input type="text" placeholder="" value="{{ old('price')}}">
    <h2>Tipo</h2>
    <input type="text" placeholder="" value="{{ old('type')}}">

    <button>
        Aggiungi film
    </button>

</div>




@endsection