
@extends('/layouts/master')

@section ('cabecera')

    <!-- <h2 align = 'center'>  INSERTAR, EDITAR Y BORRAR PELÍCULAS </h2> -->

@endsection

@section('contenido')

    <table  class="table table-bordered table-hover" >
            <thead>
                <tr>
                    <th>Id</th><th>Título</th><th>Año</th><th>Duración</th><th>Rating</th><th>Cover</th><th>FileName</th><th>FilePath</th><th>ExternalUrl</th><th>Reparto</th><th>Accion1</th><th>Accion2</th>
                </tr>
            </thead>

   @foreach ($movieList as $movie)
  
                <tr>
                        <td>{{$movie->id}}</td>
                        <td>{{$movie->title}}</td>
                        <td>{{$movie->year}}</td>
                        <td>{{$movie->duration}}</td>
                        <td>{{$movie->rating}}</td>
                        <td><img src="images/{{$movie->cover}}" width="50px"/></td>
                        <!-- <td>{{$movie->cover}}</td> -->
                        <td>{{$movie->filename}}</td>
                        <td>{{$movie->filepath}}</td>
                        <td>{{$movie->externalurl}}</td>
                        
                        <td>
                            @foreach($movie->genres as $genre)
                                {{$genre->description}}-
                            @endforeach
                            <br>
                            @foreach($movie->peopleAct as $actor)
                                {{$actor->name}}-
                            @endforeach
                        </td>
    
    
                        <td style = "margin: 0 auto;"> <form action="{{route('movie.edit',$movie->id)}}" method="GET">
                                @csrf
                                @method("GET|HEAD")
                                <input type="submit" margin=" 0 auto" value="Modificar">
                            </form>
                        </td>

                        <td style = "margin: 0 auto;"><form action= "{{route('movie.destroy',$movie->id)}}" method= "POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit"  value="Borrar">
                            </form>
                        </td>
                </tr>
                @endforeach 
    
    </table>

    <br>

    <form action= "{{route('movie.create')}}" method= "GET">
            @csrf
            @method("GET|HEAD")
            <input type="submit" value="Insertar">
        </form>
    <!-- <a href="{{route('movie.create')}}">Insertar</a>
    <a href="{{route('movie.edit',$movie->id)}}">Modificar</a></td>
    -->
@endsection

@section('pie')


@endsection


