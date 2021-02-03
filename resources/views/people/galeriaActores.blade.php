@extends('/layouts/master')

@section ('cabecera')

@endsection

@section('contenido')

    <div class="row" >

        @isset($people)

            <div class="col-sm-2">

                <div class="card-deck">

                    <div class="card">

                        @foreach ($people->moviesAct as $movie)


                            <img src="/images/{{$movie->cover}}" class="card-img-top">

                                <div class="card-body" >

                                    <table class="table table-borderless table-responsive  pull-left">
                                        <tr><td><b>{{$movie->title}}</b></td></tr>
                                    </table>

                                </div>
                        @endforeach

                    </div>

                </div>

            </div>

        @endisset

    </div>

@endsection

@section('pie')


@endsection

