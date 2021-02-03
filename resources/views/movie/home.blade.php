
@extends('/layouts/master')

@section ('cabecera')

    <h2 align = 'center'>  VISTA PRELIMINAR </h2>

@endsection

@section('contenido')


@endsection


@section('vista')

<ul>

    <li>
        titulo
    </li>
 
    @foreach ($movieList as $movie)
<div class="home" style="float:left; width: 25%;">
        <li><img src="images/{{$movie->cover}}" width="500px"/></li>
        <li>{{$movie->title}}</li>
        <li>{{$movie->year}}</li>
        <li>{{$movie->duration}}</li>
        <li>{{$movie->rating}}</li>
        <li>{{$movie->filepath}}</li>
        <li>{{$movie->externalurl}}</li>
    </div>
    @endforeach

</ul>

@endsection

@section('pie')


@endsection


