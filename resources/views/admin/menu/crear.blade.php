@extends("theme.$theme.layout")

@section('titulo')
    Sistema  Menús    
@endsection

@section("contenido")
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            @include('includes.form-error')
            @include('includes.mensaje')
            <div class="card">
              <div class="card-header bg-primary">
                <h3 class="card-title ">Crear Menús</h3>
              </div> 
              <form action="{{route('guardar_menu')}}" id="form-general" class="form-horizontal" method="POST">
                @csrf
              <!-- form start -->
              <div class="col-lg-10 offset-1">
              <form class="form-horizontal" >
                  <div class="card-body">
                    @include('admin.menu.form')
                  </div>
                  <!-- /.card-footer -->
                  <div class="card-body">
                  @include('includes.boton-form-crear')
                </div>
                </form>
              </div>
              <!-- /.card --> 
                     
              
              </div>          
            </div>
        </div>
     </div>
    </section>          
@endsection