@extends("theme.$theme.layout")

@section('titulo')
    Permisos    
@endsection

@section("contenido")
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title ">Permisos</h3>
              </div>  
                     <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nombre</th>
                      <th>Slug</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($permisos as $permiso)
                    <tr>
                        <td>{{$permiso->id}}</td>
                        <td>{{$permiso->nombre}}</td>
                        <td>{{$permiso->slug}}</td>
                        <td></td>    
                    </tr>    
                    @endforeach
                  </tbody>
                </table>
              </div>
              </div>          
            </div>
        </div>
     
    </section>          
@endsection