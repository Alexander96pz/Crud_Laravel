<h1>index</h1>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleadosI as $item)
        <tr>
            <td scope="row">{{$item->id}}</td>
            <td>{{$item->foto}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido_paterno}}</td>
            <td>{{$item->apellido_materno}}</td>
            <td>{{$item->correo}}</td>
            <td><button>edit</button><button>delete</button></td>
        </tr>
        @endforeach


    </tbody>
</table>
