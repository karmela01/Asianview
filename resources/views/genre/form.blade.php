@extends('layouts.master')

    @section ('cabecera')
    @endsection

    @section("contenido2")

        @isset($genre)
            <div class="formulario" style="padding:15px 25px 25px 25px">
                <form action="{{route('genre.update',['genre'=>$genre->id]) }}" method="POST">
                    @method("PUT")
                    <fieldset>
                        <legend>
                            <div class="textoGenero font-italic Italica" style="padding:15px 25px 25px 25px">
                                <p class="h4 text-secondary">Actualizar Géneros </p>
                            </div>
                        </legend>
        @else
                <form action="{{route('genre.store')}}" method="POST">
                        <fieldset>
                            <legend>
                                <div class="textoGenero font-italic Italica" style="padding:15px 25px 25px 25px">
                                    <p class="h4 text-secondary">Insertar Géneros </p>
                                </div>
                            </legend>
        @endisset
                        @csrf

                        <label for="description">Descripción</label>
                            <input type="text" name="description" id="description" value= "{{$genre->description??''}}"><br>

                            <input type="submit" value="Enviar">

                        </fieldset>
                </form>
            </div>
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
