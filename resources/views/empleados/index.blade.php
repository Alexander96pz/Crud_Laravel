<h1>index</h1>

<a href="{{url('empleados/create')}}">Agregar Empleado</a>
@if (Session::has('mensage')){{
    Session::get('mensage')
}}
@endif
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
            <td><img src="{{asset('storage').'/'.$item->foto}}" alt="" width="100"></td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido_paterno}}</td>
            <td>{{$item->apellido_materno}}</td>
            <td>{{$item->correo}}</td>
            <td><button><a href="{{url('/empleados/'.$item->id.'/edit')}}">edit</a></button>
            <form action="{{url('/empleados/'.$item->id)}}" method="POST">
                {{ csrf_field() }}
                {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('desea delete?')">delete</button>
                </form>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>
