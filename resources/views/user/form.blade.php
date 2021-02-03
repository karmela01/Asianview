@extends('layouts.master')

    @section ('cabecera')

       

    @endsection
   
    @section("contenido2")
    <div class="formulario" style="padding:15px 25px 25px 25px">
        @isset($user)


        <form action="{{route('user.update',['id'=>$user->id]) }}" method="POST">

            @method("PUT")
            <fieldset>
                    <legend>
                            <div class="textoGenero font-italic Italica" style="padding:15px 25px 25px 25px">
                                <p class="h4 text-secondary">Actualizar Usuarios </p>
                                </div>
                    </legend>
        @else
            <form action="{{route('user.store')}}" method="POST">
                    <fieldset>
                            <legend>
                                    <div class="textoGenero font-italic Italica" style="padding:15px 25px 25px 25px">
                                        <p class="h4 text-secondary">Insertar Usuarios </p>
                                        </div>
                            </legend>
        @endisset
            @csrf
           
                    <div class="name">
                <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" value= "{{$user->name??''}}"><br>
                    </div>
                    <div class="email">
                <label for="email">email </label>
                    <input type="email" name="email" id = 'email' value= '{{$user->email??''}}'><br>
                </div>
                    <div class="password">
                    <label for = 'password'>Password</label>
                    <input type="text" name="password" id = 'password' value= '{{$user->password??''}}'><br>
                </div>
                    <input type="submit" >

            </fieldset>
            </form>
        </div>
    @endsection

    @section('pie')


    @endsection
