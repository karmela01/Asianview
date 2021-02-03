
@extends('/layouts/master')

@section ('cabecera')

    <div class="textoGenero font-italic Italica" style="padding:15px 25px 0px 25px">
        <p class="h4 text-secondary">Personas </p>
        </div>

@endsection

@section('contenido2')

<div class="insertar float-right" style="padding: 0px 80px 15px 0px">
    <form action= "{{route('people.create')}}" method= "GET">
            @csrf
            @method("GET|HEAD")
            <input type="submit" value="Insertar">
        </form>
    </div>

    <table  class="table table-bordered table-hover" >
            <thead>
                <tr>
                    <th>Id</th><th>Nombre</th><th>Foto</th><th>ExternalUrl</th><th>Accion1</th><th>Accion2</th>
                </tr>
            </thead>

    @foreach ($peopleList as $people)
                <tr>
                        <td>{{$people->id}}</td>
                        <td>{{$people->name}}</td>
                        <td><img src="imagesPeople/{{$people->photo}}" width="30px"/></td>
                        <!-- <td>{{$people->photo}}</td> -->
                        <td>{{$people->externalurl}}</td>

                        <td style = "margin: 0 auto;"> <form action="{{route('people.edit',$people->id)}}" method="GET">
                                @csrf
                                @method("GET|HEAD")
                                <input type="submit" margin=" 0 auto" value="Modificar">
                            </form>
                        </td>

                        <td style = "margin: 0 auto;"><form action= "{{route('people.destroy',$people->id)}}" method= "POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" onclick="confirmacion()" value="Borrar">
                            </form>
                        </td>
                </tr>
    @endforeach
    </table>

    <script>
            function confirmacion(){

        confirm ("¿Está seguro de que quiere borrar?");
        }
        </script>

@endsection

@section('pie')
@endsection


