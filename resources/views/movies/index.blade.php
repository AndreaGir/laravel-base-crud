@extends('app')

@section('mainSection')
<button>
    <a href="/create">
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
                <button>modifica</button>
                <button>cancella</button>
            </td>
        </tr>


    
@endforeach

    </tbody>
</table>
    
@endsection


