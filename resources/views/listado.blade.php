@extends('template')

@section('list')

<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <form >
                    @csrf
                        <div class="form-row">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="nombre" placeholder="" >
                        </div>

                        </div>
                        

                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col"> Nombre</th>
            <th scope="col">Apellido </th>
            <th scope="col">Correo</th>
            <th scope="col">telefono</th>
            <th scope="col">programa </th>
            <th scope="col">contacto</th>
        </tr>
    </thead>
    <tbody>
        <ul>
            @forelse($estudiantes as $e)
            <tr>
                <td>{{$e['id']}}</td>
                <td>{{$e['nombre']}}</td>
                <td>{{$e['apellido']}}</td>
                <td>{{$e['email']}}</td>
                <td>{{$e['telefono']}}</td>
                <td>{{$e['programa']}}</td>
                @if($e['contacto']==0)
                <td>
                    <form method="post"  action="{{route('call')}}">
                        @csrf
                        <button type="submit" name="id" value="{{$e['id']}}"><i class="fas fa-phone"></i></button>
                    </form>
                </td>
                @else
                <td><i class="fas fa-phone-slash"></i></td>

                @endif
            </tr>
            @empty
            <li>Datos inexistentes</li>

            @endforelse
        </ul>

    </tbody>

</table>

<!-- <script>
    window.addEventListener("load", function() {
        document.getElementById("buscar").addEventListener("keyup", function() {
            document.getElementById("buscar").value
        })
    })
</script> -->

@endsection