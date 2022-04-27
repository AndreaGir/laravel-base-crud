<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    
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
        </tr>
        <tr>
            <td>
                {{ $movie->description}}
            </td>
        </tr>
        <tr>
            <td>
                {{ $movie->series}}
            </td>
        </tr>
        <tr>
            <td>
                {{ $movie->sale_date}}
            </td>
        </tr>
        <tr>
            <td>
                {{ $movie->price}}
            </td>
        </tr>
        <tr>
            <td>
                {{ $movie->type}}
            </td>
        </tr>


    
@endforeach

    </tbody>
</table>
  
    
</body>
</html>

