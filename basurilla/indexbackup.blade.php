
@extends('/layouts/master')

@section ('cabecera')

    <!-- <h2 align = 'center'>  INSERTAR, EDITAR Y BORRAR PELÍCULAS </h2> -->

@endsection

@section('contenido')

<div class="container-fuid">      
       
    <div class="row" >
        @foreach ($movieList as $movie)
               
            <div class="col-sm-2">
                    
                <div class="card-deck">

                    <div class="card"> 
                    
                        <img src="images/{{$movie->cover}}" class="card-img-top">

                            <div class="card-body">

                                <table class="table table-borderless table-responsive">
                                    <tr><td>{{$movie->title}}</td></tr>
                                    <tr><td>{{$movie->year}}</td></tr>
                                    <tr><td>{{$movie->duration}}.min</td></tr>
                                    <tr><td>{{$movie->rating}}</td></tr>
                                    <tr><td>{{$movie->filename}}</td></tr>
                                    <tr><td>{{$movie->filepath}}</td></tr>
                                    <tr><td>{{$movie->externalurl}}</td></tr>

                                </table>               
                                        
                                                
                            </div>

                    </div>

                </div>
                
            </div>

        @endforeach

    </div>    

</div>





@endsection

@section('pie')


@endsection


