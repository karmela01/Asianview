
@extends('/layouts/master')

@section ('cabecera')

     <div class="textoGenero font-italic Italica" style="padding:15px 25px 0px 25px">
        <p class="h4 text-secondary">Géneros </p>
    </div>

@endsection

@section('contenido2')

    <div class="insertar float-right" style="padding: 0px 80px 15px 0px">
        <form action= "{{route('genre.create')}}" method= "GET">
            @csrf
                @method("GET|HEAD")
                    <input type="submit" value="Insertar">
        </form>
    </div>

    <table  class="table table-bordered table-hover" >
        <thead>
            <tr>
                <th>Id</th><th>Descripción</th><th>Accion1</th><th>Accion2</th>
            </tr>
        </thead>

        @foreach ($genreList as $genre)

            <tr>
                <td>{{$genre->id}}</td>
                <td>{{$genre->description}}</td>
                <!--
                <td style = "margin: 0 auto;"> <form action="{{route('genre.edit',$genre->id)}}" method="GET">
                @csrf
                @method("GET|HEAD")
                    <input type="submit" margin=" 0 auto" value="Modificar">
                    </form>
                    </td>
                -->
                <td style = "margin: 0 auto;">
                    <form action="" method="GET">
                        @csrf
                            @method("GET|HEAD")
                                <input type="submit" margin=" 0 auto" value="Modificar">
                    </form>
                </td>

                <td style = "margin: 0 auto;">
                    <form action= "{{route('genre.destroy',$genre->id)}}" method= "POST">
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

@section('pie2')
@endsection


