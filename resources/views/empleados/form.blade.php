{{-- {{$modo=='crear' ? 'Add' : 'Update'}} --}}
<div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input type="text" class="form-control" name="nombre" value="{{ isset($datos_empleados->nombre)?$datos_empleados->nombre:''}}">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Apellido Paterno</label>
    <input type="text" class="form-control" name="apellido_paterno" value="{{ isset($datos_empleados->apellido_paterno)?$datos_empleados->apellido_paterno:''}}">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">ApellidoMaterno</label>
    <input type="text" class="form-control" name="apellido_materno" value="{{isset($datos_empleados->apellido_materno)?$datos_empleados->apellido_materno:''}}"     >
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="correo" value="{{isset($datos_empleados->correo)?$datos_empleados->correo:''}}"     >
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Foto</label>
    <input type="file" class="form-control" name="foto" value="">
</div>
<button type="submit" class="btn btn-primary">{{$modo=='crear' ? 'Add' : 'Update'}}</button>
<button><a href="{{url('empleados')}}">Regresar</a></button>
