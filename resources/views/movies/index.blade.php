@extends('app')

@section('mainSection')
<button>
    <a href="{{ route("movies.create")}}">
        aggiungi film
    </a>
    
</button> 
<table>
    <thead class="indici">
        <th>titolo</th>
        <th>descrizione</th>
        <th>serie</th>
        <th>data</th>
        <th>prezo</th>
        <th>tipo</th>
    </thead>
    <tbody >
@foreach ($movies as $movie)
        <tr >
            <td class="linee">
                {{ $movie->title}}
            </td>
            <td class="linee">
                {{ $movie->description}}
            </td>
            <td class="linee">
                {{ $movie->series}}
            </td>
            <td class="linee">
                {{ $movie->sale_date}}
            </td>
            <td class="linee">
                {{ $movie->price}}
            </td>
            <td class="linee">
                {{ $movie->type}}
            </td>
            <td>
                <a href="{{ route('movies.edit', $movie)}}">
                    <button>modifica</button>
                </a>
                <form action="{{ route('movies.destroy', $movie)}}" method="post">
                    @csrf
                    @method('DELETE')

                    <button type="submit">elimina</button>
                </form>
            </td>
        </tr>


    
@endforeach

    </tbody>
</table>
    
@endsection


