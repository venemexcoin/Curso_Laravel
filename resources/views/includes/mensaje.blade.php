@if (session("mensaje"))
    

    <!-- /.card-header -->
<div class="card-body">
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-check"></i> Alert!</h5>
       Mensaje sistema Biblioteca
       <ul>
       <li>{{session("mensaje")}}</li>
    </ul>
    </div>
    
  <!-- /.card-body -->
@endif
