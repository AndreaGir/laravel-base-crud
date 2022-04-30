<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="common.css" rel="stylesheet" type="text/css">
</head>
<body>


    <h1 class="titoloHome">
        FILM
    </h1>

    <button >
        <a class="titolifilm" href="/movies" >
            Lista dei film
        </a>
    </button>
    <button>
        <a class="titolifilm" href="/">
            home
        </a>
    </button>

    

    @yield('mainSection')

    @yield('mainCreate')

    

</body>
</html>