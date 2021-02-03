<div class="card" style="width: 18rem; margin:25px;">

        @foreach ($movieList as $movie)

        <img src="images/{{$movie->cover}}" class="card-img-top" alt="50px">
        <div class="card-body">
            <ul>
                <li>{{$movie->title}}</li><br/>
                <li>{{$movie->year}}</li><br/>
                <li>{{$movie->duration}}</li> min.<br/>
                <li>{{$movie->title}}</li><br/>
                <li>{{$movie->title}}</li><br/>
                <li>{{$movie->title}}</li><br/>
                <li>{{$movie->title}}</li><br/>
            </ul>
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>


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