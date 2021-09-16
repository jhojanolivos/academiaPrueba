<!doctype html>
<html lang="es">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://bootswatch.com/5/quartz/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark row" >
        <div class="col-md-4">

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('form')}}">Formulario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('list')}}">Listado</a>
                </li>
            </ul>
        </div>
        <div class=" d-flex justify-content-center col-md-2">

            <span class="navbar-brand mb-0 h1" style="text-align: right">Academia prueba</span>
        </div>
    </nav>

    <div class="container">

       @yield('academi')
       @yield('list')
    </div>


</body>

</html>