@extends('app')

@section('mainSection')
<table>
    <thead>
        <th>titolo</th>
        <th>descrizione</th>
        <th>serie</th>
        <th>data</th>
        <th>prezo</th>
        <th>tipo</th>
    </thead>
    <tbody>
@foreach ($movies as $movie)
        <tr>
            <td>
                {{ $movie->title}}
            </td>
            <td>
                {{ $movie->description}}
            </td>
            <td>
                {{ $movie->series}}
            </td>
            <td>
                {{ $movie->sale_date}}
            </td>
            <td>
                {{ $movie->price}}
            </td>
            <td>
                {{ $movie->type}}
            </td>
        </tr>


    
@endforeach

    </tbody>
</table>
    
@endsection


