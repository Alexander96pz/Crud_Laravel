<form action="{{url('/empleados')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Apellido Paterno</label>
        <input type="text" class="form-control" name="apellido_paterno" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">ApellidoMaterno</label>
        <input type="text" class="form-control" name="apellido_materno" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" name="correo" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Foto</label>
        <input type="file" class="form-control" name="foto" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
