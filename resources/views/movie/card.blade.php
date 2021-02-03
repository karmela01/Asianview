@extends('/layouts/master')

@section ('cabecera')

@endsection

@section('contenido')



<div class="container-fuid">      
       
    <div class="row" >
        
               
            <div class="col-sm-2">
                    
                <div class="card-deck">

                        <div class="card mb-3" style="max-width: 540px;">
                                <div class="row no-gutters">
                                  <div class="col-md-4">
                                    <img src="images/{{$movie->cover}}" class="card-img" alt="...">
                                  </div>
                                  <div class="col-md-8">
                                    <div class="card-body">
                                        <ul>
                                            <li>{{$movie->title}}</li>
                                            <li>{{$movie->title}}</li>
                                            <li>{{$movie->title}}</li>
                                            <li>{{$movie->title}}</li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                      <h5 class="card-title">Card title</h5>
                                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                  </div>
                                </div>
                              </div>

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
                                    <td style = "margin: 0 auto;"> <form action="{{route('movie.show',$movie->id)}}" method="GET">
                                        @csrf
                                        @method("GET|HEAD")
                                        <input type="submit" margin=" 0 auto" value="Modificar">
                               
                                </td>

                                </table>               
                                        
                                                
                            </div>

                    </div>

                </div>
                
            </div>

        

    </div>    

</div>





@endsection

@section('pie')


@endsection


