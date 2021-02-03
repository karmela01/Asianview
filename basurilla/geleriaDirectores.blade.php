@extends('/layouts/master')

@section ('cabecera')

@endsection

@section('contenido')

    <div class="row" style="padding:30px 50px" >

        @isset($people)
        @foreach ($people->moviesDirect as $movie)

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
        @endisset

    </div>

@endsection

@section('pie')


@endsection