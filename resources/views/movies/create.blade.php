@extends('app')

@section('mainCreate')
{{-- @if ($errors->())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif --}}

<form action="{{ route('movies.store')}}" method="post">
    @csrf



<div class="input">
    <h2>Titolo</h2>
    <input type="text" placeholder="" name="title" value="{{ old('title')}}">
    <h2>Descrizione</h2>
    <input type="text" placeholder="" name="description" value="{{ old('description')}}">
    <h2>Serie</h2>
    <input type="text" placeholder="" name="series" value="{{ old('series')}}">
    <h2>Data uscita</h2>
    <input type="text" placeholder="" name="sale_date" value="{{ old('sale_date')}}">
    <h2>Prezzo</h2>
    <input type="text" placeholder="" name="price" value="{{ old('price')}}">
    <h2>Tipo</h2>
    <input type="text" placeholder="" name="type" value="{{ old('type')}}">

    
        <button> Aggiungi film</button>
    
</div>

</form>




@endsection