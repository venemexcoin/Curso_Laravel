@if ($errors->any())
    

    <!-- /.card-header -->
<div class="card-body">
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-ban"></i> Alert!</h5>
       el formulario contiene errores
       <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    
  <!-- /.card-body -->
@endif


