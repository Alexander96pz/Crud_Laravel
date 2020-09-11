<form action="{{url('/empleados/'.$datos_empleados->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    @include('empleados.form', ['modo'=>'edit'])
    {{-- <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="{{$datos_empleados->nombre}}" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Apellido Paterno</label>
        <input type="text" class="form-control" name="apellido_paterno" value="{{$datos_empleados->apellido_paterno}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">ApellidoMaterno</label>
        <input type="text" class="form-control" name="apellido_materno" value="{{$datos_empleados->apellido_materno}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="correo" value="{{$datos_empleados->correo}}" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Foto</label>
        <input type="file" class="form-control" name="foto" value="" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
<button><a href="{{url('empleados')}}">Regresar</a></button> --}}
</form>
