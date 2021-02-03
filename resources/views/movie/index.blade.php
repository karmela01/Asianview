
@extends('/layouts/master')

@section ('cabecera')

@endsection

@section('contenido')

    <div class="textoGenero font-italic Italica" style="padding:15px 25px 0px 25px">
    <p class="h4 text-secondary">Películas por Género </p>
    </div>

    <div class="row h5" style="padding:15px 25px 15px 35px">
        @foreach ($genreList as $genre)
            <a class="text-secondary font-italic Italica" style="margin-right:10px" href="{{route('genre.show',$genre->id)}}"> {{$genre->description}} </a>
        @endforeach
    </div>

        <div class="row" style="padding:0px 50px" >

            @foreach ($movieList as $movie)

                <div class="col-sm-2">

                    <div class="card-group" style="padding:0px 0px 20px 0px">

                        <div class="card  bg-secondary">

                            <img src="/images/{{$movie->cover}}" class="card-img-top">

                                <div class="card-body" style="margin-bottom:10px">

                                    <div class="name">
                                            <a class="text-dark" href="{{route('movie.show',$movie->id)}}"><b>{{$movie->title}}</b></a>
                                    </div>
                                    <div class="year">
                                            {{$movie->year}}
                                    </div>
                                    <div class="rating">
                                                @for ($i=0; $i < $movie->rating; $i++)
                                                <i class="lni-star-filled"></i>
                                                @endfor
                                                @for ($i=$movie->rating; $i<9; $i++)
                                                <i class="lni-star"></i>
                                                @endfor</td></tr>
                                    </div>
                                    @auth
                                    <div class="edit" style="padding:5px 0px 5px 0px">
                                        <form action="{{route('movie.edit',$movie->id)}}" method="GET">
                                        @csrf
                                        @method("GET|HEAD")
                                        <input type="submit" class="btn btn-outline-primary bg-dark" style="width:100px" value="Modificar">
                                        </form>
                                    </div>

                                    <div class="delete" style="padding:5px 0px 5px 0px">
                                        <form action= "{{route('movie.destroy',$movie->id)}}" method= "POST">
                                            @csrf
                                            @method("DELETE")
                                            <input id="borrado" type="submit" onclick="confirmacion()" class="btn btn-outline-danger bg-dark" style="width:100px" value="Borrar">
                                        </form>
                                    </div>
                                    @endauth
                                </div>
                        </div>

                    </div>

                </div>

            @endforeach

        </div>

</div>
<script>
        function confirmacion(){

    confirm ("¿Está seguro de que quiere borrar?");
    }
    </script>
@endsection

@section('pie')

@endsection
