@extends('layouts.master')

    @section ('cabecera')



    @endsection

    @section("contenido2")


        @isset($movie)

        <form enctype='multipart/form-data' action="{{route('movie.update',['id'=>$movie->id]) }}" method="POST">

            @method("PUT")
            <fieldset>
                    <legend>
                            <div class="textoGenero font-italic Italica" style="padding:15px 25px 25px 25px">
                                <p class="h4 text-secondary">Actualizar Películas </p>
                                </div>
                    </legend>
        @else
            <form enctype='multipart/form-data' action="{{route('movie.store')}}" method="POST">
                <fieldset>
                        <legend>
                                <div class="textoGenero font-italic Italica" style="padding:15px 25px 25px 25px">
                                    <p class="h4 text-secondary"> Insertar Películas </p>
                                    </div>
                        </legend>
        @endisset
            @csrf

                <label for="title" >Título</label>
                    <input type="text" name="title" id="title" value= "{{$movie->title??''}}">
                <label for="year">Año</label>
                    <input type="year" name="year" id = 'year' value= '{{$movie->year??''}}'>
                <label for = 'duration'>Duración</label>
                    <input type="text" name="duration" id = 'duration' value= '{{$movie->duration??''}}'>
                <label for = 'rating'>Rating</label>
                    <input type="text" name="rating" id = 'rating' value= '{{$movie->rating??''}}'><br><br><br>


                    <label for = 'cover'>Cover</label>
                    <input type='hidden' name='MAX_FILE_SIZE' value='8000000' >
                    <input type="file" name="cover" id = 'cover' value= '{{$movie->cover??''}}'>

                    <label for = 'genre'>Género</label>
                    <select name="genre[]" id="genre" multiple>
                            @foreach ($genreList as $genre)
                             <option  value="{{$genre->id}}">{{$genre->description}}</option>
                            @endforeach
                    </select>
                            <label for = 'people'>Actores</label>
                    <select name="cast[]" id="cast" multiple>
                            @foreach ($peopleList as $people)
                             <option  value="{{$people->id}}">{{$people->name}}</option>
                            @endforeach
                    </select>
                            <label for = 'people'>Director</label>
                    <select name="direction[]" id="direction" multiple>
                            @foreach ($peopleList as $people)
                             <option  value="{{$people->id}}">{{$people->name}}</option>
                            @endforeach
                    </select>
                </select><br><br><br>

                <label for = 'filename'>Filename</label>
                    <input type="text" name="filename" id = 'filename' value= '{{$movie->filename??''}}'>
                <label for = 'filepath'>Filepath</label>
                <input type="file" name="filepath" id = 'filepath' value= '{{$movie->filepath??''}}'>
                <label for = 'externalurl'>Externalurl</label>
                    <input type="text"  name="externalurl" id = 'externalurl' value= '{{$movie->externalurl??''}}'><br>




                    <input type="submit" value="Enviar">
                </fieldset>
            </form>

            @if(count($errors)>0)
            <ul>

                @foreach ($errors->all() as $errors)
                <li>
                    {{$errors}}
                </li>
                @endforeach
            </ul>

        @endif

    @endsection

    @section('pie2')


    @endsection

