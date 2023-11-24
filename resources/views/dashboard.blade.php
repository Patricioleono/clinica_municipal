@extends('layouts.app')



@section('navbar')
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
  </div>
</nav>
@endsection

@section('asidebar')

<style>
  #wrapper { overflow-x: hidden; }
  #sidebar-wrapper { min-height: 90vh; margin-left: -15rem; transition: margin 0.25s ease-out;}
  #sidebar-wrapper .list-group { width: 15rem; }
  #page-content-wrapper { min-width: 100vw; }
  @media (min-width: 600px) {
    #sidebar-wrapper {
      margin-left: 0;
    }

    #page-content-wrapper {
      min-width: 0;
      width: 100%;
    }

    body.sb-sidenav-toggled #wrapper #sidebar-wrapper {
      margin-left: -15rem;
    }
  }

</style>

<div class="row">
  <div class="col-2">
    <div class=" d-flex w-100" id="wrapper">
      <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="list-group list-group-flush" id="list-tab" role="tablist">
      
          <li class="list-group-item" 
              data-bs-toggle="collapse" 
              href="#mantenedoresLista" 
              role="button" 
              aria-expanded="false" 
              aria-controls="mantenedoresLista">Mantenedores</li>

          <div class="collapse" id="mantenedoresLista">
            <div class="list-group list-group-flush p-2" id="mantenedores" role="tablist">
              <a class="list-group-item list-group-item-action ms-1 rounded" data-bs-toggle="list" href="#mantenedorPerfiles" role="tab">Mantendor de Perfiles</a>
              <a class="list-group-item list-group-item-action ms-1 rounded" data-bs-toggle="list" href="#mantenedorNoticias" role="tab">Mantenedor de Noticias</a>
              <a class="list-group-item list-group-item-action ms-1 rounded" data-bs-toggle="list" href="#mantenedorProfesionales" role="tab">Mantenedor de Profesionales</a>
            </div>
          </div>

          <li class="list-group-item" 
              data-bs-toggle="collapse" 
              href="#inventarioLista" 
              role="button" 
              aria-expanded="false" 
              aria-controls="inventarioLista">Inventario</li>

          <div class="collapse" id="inventarioLista">
            <div class="list-group list-group-flush p-2" id="inventario" role="tablist">
              <a class="list-group-item list-group-item-action ms-1 rounded" data-bs-toggle="list" href="#registroProductos" role="tab">Registro Productos</a>
              <a class="list-group-item list-group-item-action ms-1 rounded" data-bs-toggle="list" href="#balanceProductos" role="tab">Balance</a>
              <a class="list-group-item list-group-item-action ms-1 rounded" data-bs-toggle="list" href="#estadisticas" role="tab">Estadisticas</a>
            </div>
          </div>

        </div>
      </div>
    </div>  
  </div>
 
@endsection

@section('contentDashboard')

  <div class="col-10">

    <div class="tab-content">
      <div class="tab-pane fade" id="mantenedorPerfiles" role="tabpanel">Mantenedor de perfiles vista web</div>
      <div class="tab-pane fade" id="mantenedorNoticias" role="tabpanel">Mantenedor de noticias pie de pagina</div>
      <div class="tab-pane fade" id="mantenedorProfesionales" role="tabpanel">Mantenedor profesionales que trabajan en la clinica</div>
      <div class="tab-pane fade" id="registroProductos" role="tabpanel">inventario 1</div>
      <div class="tab-pane fade" id="balanceProductos" role="tabpanel">inventario 2</div>
      <div class="tab-pane fade" id="estadisticas" role="tabpanel">inventario</div>
    
    </div>


  </div>
</div>
@endsection

@section('scriptDashboard')
<script>
 $(document).ready(function() {
 

 });
</script>
@endsection

