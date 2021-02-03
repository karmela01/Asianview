

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
    <title>@yield('Titulo')</title>
 <!-- style -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<body>

           @include('layouts/navBar1')
           @yield ('cabecera')



    <div class="contenido bg-dark" >
            @yield('contenido')
    </div>

    <div class="contenido2" >
            @yield('contenido2')
    </div>
            @yield ('vista')



    <footer class= "pie bg-dark">
            @yield('pie')

             <b>©Carmen Castro 2º DAW </b>
    </footer>


</body>
</html>

