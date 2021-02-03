@extends('layouts.master')

    @section ('cabecera')
    @endsection

    @section("contenido2")
        <div class="formulario" style="padding:15px 25px 25px 25px">
            @isset($people)

                <form enctype='multipart/form-data' action="{{route('people.update',['id'=>$people->id]) }}" method="POST">

                    @method("PUT")
                    <fieldset>
                        <legend>
                            <div class="textoGenero font-italic Italica" style="padding:15px 25px 25px 25px">
                                <p class="h4 text-secondary">Actualizar Personas </p>
                            </div>
                        </legend>
            @else
                <form enctype='multipart/form-data' action="{{route('people.store')}}" method="POST">
                    <fieldset>
                        <legend>
                            <div class="textoGenero font-italic Italica" style="padding:15px 25px 25px 25px">
                                <p class="h4 text-secondary">Insertar Personas </p>
                            </div>
                        </legend>
            @endisset
                @csrf
                            <div class="name">
                            <label for="name" >Nombre</label>
                                <input type="text" name="name" id="name" value= "{{$people->name??''}}">
                            </div>
                            <div class="photo">
                            <label for = 'photo'>Foto</label>
                                <input type='hidden' name='MAX_FILE_SIZE' value='8000000' >
                                <input type="file" name="photo" id = 'photo' >
                            </div>
                                <div class="externalurl">
                            <label for = 'externalurl'>Externalurl</label>
                                <input type="text"  name="externalurl" id = 'externalurl' value= '{{$people->externalurl??''}}'><br>
                            </div>

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
        </div
    @endsection

    @section('pie')
    @endsection

