@extends('layouts.app')



@section('navbar')
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand ms-3" href="#">Logo</a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active ms-5" aria-current="page" href="#">Nombre Completo</a>
        <a class="nav-link ms-5 me-3" href="#">Logout</a>
      </div>
    </div>
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
      <div class="border-end" id="sidebar-wrapper">
        <div class="text-center mt-3 mb-3">
          <h5> <i class="fa-solid fa-bars"></i> Secciones</h5>
        </div>
        <div class="list-group list-group-flush p-2" id="list-tab" role="tablist">
          <a class="list-group-item list-group-item-action ms-1 fs-6 border-0 rounded-5 active" data-bs-toggle="list" href="#inicioPanel" role="tab"><i class="fa-solid fa-star-of-life"></i> Inicio</a>
          <a class="list-group-item list-group-item-action ms-1 fs-6 border-0 rounded-5" data-bs-toggle="list" href="#mantenedorPerfiles" role="tab"><i class="fa-solid fa-users-viewfinder"></i> Mantendor de Perfiles</a>
          <a class="list-group-item list-group-item-action ms-1 fs-6 border-0 rounded-5" data-bs-toggle="list" href="#mantenedorNoticias" role="tab"><i class="fa-solid fa-book"></i> Mantenedor de Noticias</a>
          <a class="list-group-item list-group-item-action ms-1 fs-6 border-0 rounded-5" data-bs-toggle="list" href="#mantenedorProfesionales" role="tab"><i class="fa-solid fa-user-doctor"></i> Mantenedor de Profesionales</a>
          <a class="list-group-item list-group-item-action ms-1 fs-6 border-0 rounded-5" data-bs-toggle="list" href="#registroProductos" role="tab">Registro Productos</a>
          <a class="list-group-item list-group-item-action ms-1 fs-6 border-0 rounded-5" data-bs-toggle="list" href="#balanceProductos" role="tab">Balance</a>
          <a class="list-group-item list-group-item-action ms-1 fs-6 border-0 rounded-5" data-bs-toggle="list" href="#estadisticas" role="tab"><i class="fa-solid fa-chart-line"></i> Estadisticas</a>
        </div>
      </div>
    </div>  
  </div>
 
@endsection

@section('contentDashboard')

  <div class="col-10">

    <div class="tab-content">
      <div class="tab-pane fade show active" id="inicioPanel" role="tabpanel">primera vista</div>
      <div class="tab-pane fade" id="mantenedorPerfiles" role="tabpanel">
        <div class="row">
          
            <div class="container-fluid mt-5">
              <div class="row text-center">
                <div class="col-6">
                  <h5>Mantenedor de Perfiles Técnicos</h5>
                </div>
                <div class="col-6">
                  <button class="btn btn-outline-success">
                    Agregar Perfil Técnico
                  </button>
                </div>
              </div>
              <div class="row">
                <div class="container">
                  <div class="col-8">
                    <div class="container-fluid text-center mt-3">
                      <div class="container mt-3">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <table class="table table-striped table-bordered data-table">
                                              <thead class="bg-secondary text-white">
                                                  <tr>
                                                      <th>#</th>
                                                      <th>Nombre Completo</th>
                                                      <th>Especialidad</th>
                                                      <th>Foto</th>
                                                      <th>Descripcion</th>
                                                      <th>Acciones</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
        </div>
      </div>
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

