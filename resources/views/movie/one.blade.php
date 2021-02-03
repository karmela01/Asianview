
@extends('/layouts/master')

@section ('cabecera')

@endsection

@section('contenido')


<div class="container" style="padding-top:40px">

    <!--div class="row" -->
    <div class="no-gutters">
        @isset($movie)

        <div class="row pb-3 bg-secondary" style="max-width: 650px">

                <div class="col-md-6">

                <img src="/images/{{$movie->cover}}" class="card-img" alt="...">

                        </div>
                <div class="col-md-6">
                <div class="card-body">

                            <div class="name">
                                Nombre:
                                    <a class="text-dark" href="{{route('movie.show',$movie->id)}}"><b>{{$movie->title}}</b></a>
                            </div>
                            <div class="year">
                                Año:
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
                            <div class="duration">
                                    duración:
                                        {{$movie->duration}}. min
                                </div>
                                <div class="genre">
                                        Género:
                                        @foreach($movie->genres as $genre)
                                        <a class="text-dark" href="{{route('genre.show',$genre->id)}}"> {{$genre->description}} </a>
                                        @endforeach
                                    </div>
                                    <div class="Direct">
                                            Dirigida por:
                                            @foreach($movie->peopleDirect as $director)
                                            <a class="text-dark" href="{{route('peopleDirectMovies.show',$director->id)}}"> {{$director->name}} </a>
                                            @endforeach
                                        </div>
                                        <div class="Act">
                                                Actuan:
                                                @foreach($movie->peopleAct as $actor)
                                                <a class="text-dark" href="{{route('peopleActMovies.show',$actor->id)}}"> {{$actor->name}} </a>
                                                @endforeach
                                            </div>


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
                        <div class="play" style="padding:5px 0px 5px 0px">
                                <video src="/images/{{$movie->filepath}}" width="180"  controls preload>
                                    <source src="/images/{{$movie->filepath}}" type='video/mp4; codecs="avc1,mp4a"' />
                                </video>

                        </div>



                </div>
                </div>

            </div>

        </div>


        @endisset

    <!--/div-->

</div>
<script>
        function confirmacion(){

    confirm ("¿Está seguro de que quiere borrar?");
    }
    </script>

@endsection

@section('pie')


@endsection


