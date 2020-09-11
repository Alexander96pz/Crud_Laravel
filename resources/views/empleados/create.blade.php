<h4>ADD EMPLEADOS</h4>
<form action="{{url('/empleados')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    @include('empleados.form',['modo'=>'crear'])
</form>
