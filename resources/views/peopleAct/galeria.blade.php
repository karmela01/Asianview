@extends('/layouts/master')

@section ('cabecera')
@endsection

@section('contenido')

    <div class="row" style="padding:30px 50px" >

        @isset($peopleAct)

        <div class="textoGenero font-italic Italica" style="padding:15px 25px 0px 25px">
            <p class="h4 text-secondary">Películas en las que actua {{$peopleAct->name}} </p>
        </div>

        <div class="row" style="padding:30px 50px" >

            @foreach ($peopleAct->moviesAct as $movie)

                <div class="col-sm-2">

                    <div class="card-group">

                        <div class="card bg-secondary">

                                <img src="/images/{{$movie->cover}}" class="card-img-top">

                                    <div class="card-body" style="margin-bottom:10px">
                                            <div class="name">
                                                <span class="text-dark"><b>{{$movie->title}}</b></span>
                                            </div>
                                    </div>
                        </div>

                    </div>

                </div>

            @endforeach
        </div>
        @endisset

    </div>

@endsection

@section('pie')
@endsection
