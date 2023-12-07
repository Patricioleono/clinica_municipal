@extends('layouts.app')

@section('header')
    @include('includes.header')
@endsection

@section('contentCarousel')
    <div class="bg-body-tertiary">
        <div class="container">
            <div class="row">
                <div class="col-9 mt-4">
                    <div id="carouselExampleFade" class="col-12 carousel slide carousel-fade">
                        <div class="carousel-inner col-12">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            </div>
                            <div class="carousel-item active" style="height: 350px;">
                                <img src="img/Banner.jpg" class="d-block w-100 rounded" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <!-- RESERVAR HORAS -->
                <div class="col-3 bg-white rounded mt-4">
                    <div class="d-flex justify-content-center">
                        <h5 class="justify-content-center mt-3 lead">Reserva Tu Hora</h5>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <button type="button" class="btn btn-outline-primary fst-italic w-100" data-bs-toggle="modal" data-bs-target="#reservarHora" id="buttonReservarHora">
                            <i class="fa fa-calendar" aria-hidden="true"></i> Reservar Hora
                        </button>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <button type="button" class="btn btn-outline-success fst-italic w-100" data-bs-toggle="modal" data-bs-target="#modificarHora" id="buttonModificarHora">
                            <i class="fa fa-pencil-square" aria-hidden="true"></i> Modificar Hora
                        </button>
                    </div>
                    <div class="text-dark mt-4">
                        <hr>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h5 class="justify-content-center mt-3 lead">Servicio Online</h5>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <button type="button" class="btn btn-outline-primary fst-italic w-100">
                            <i class="fa fa-envelope" aria-hidden="true"></i> Consultas Generales
                        </button>
                    </div>
                    <div class="d-flex justify-content-center mt-2">
                        <button type="button" class="btn btn-outline-success fst-italic w-100">Revision Examenes</button>
                    </div>
                </div>
            </div>
            <!-- PERFIL PROFESIONALES -->
            <div class="row bg-body-tertiary flex-nowrap overflow-auto mt-2">
                <div class="card m-2 col-2 p-2">
                    <a href="">
                        <img src="img/2.jpg" class="card-img-top" alt="...">
                    </a>
                </div>

                <div class="card m-2 col-2 p-2">
                    <a href="">
                        <img src="img/1.jpg" class="card-img-top" alt="...">
                    </a>
                </div>

                <div class="card m-2 col-2 p-2">
                    <a href="">
                        <img src="img/3.jpg" class="card-img-top" alt="...">
                    </a>
                </div>

                <div class="card m-2 col-2 p-2">
                    <a href="">
                        <img src="img/4.jpg" class="card-img-top" alt="...">
                    </a>
                </div>

                <div class="card m-2 col-2 p-2">
                    <a href="">
                        <img src="img/5.jpg" class="card-img-top" alt="...">
                    </a>
                </div>

                <div class="card m-2 col-2 p-2">
                    <a href="">
                        <img src="img/6.jpg" class="card-img-top" alt="...">
                    </a>
                </div>

                <div class="card m-2 col-2 p-2">
                    <a href="">
                        <img src="img/7.jpg" class="card-img-top" alt="...">
                    </a>
                </div>

            </div>
            <!-- SERVICIOS REALIZADOS EN LA CLINICA -->
            <div class="row mt-4 flex-nowrap overflow-auto text-center">

                <div class="card mb-3 col-3 m-1">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"> <i class="fa-solid fa-house-medical"></i> Consulta General</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 col-3 m-1 ">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fa-solid fa-x-ray"></i> Imagenologia</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 col-3 m-1">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fa-solid fa-puzzle-piece"></i> Sala de Estimulacion</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3 col-3 m-1">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <div class="card-body">
                                <h5 class="card-title"><i class="fa-solid fa-tooth"></i> Odontologia</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- NOTICIAS SALUD -->
            <div class="row mt-4 d-flex justify-content-center">

                <div class="card border-dark mb-3 m-2 col-4" style="max-width: 19rem;">
                    <div class="card-header mt-1 text-center">Bacterias</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Enemigo natural</h5>
                        <a href="https://cnnespanol.cnn.com/2023/12/06/ningun-antibiotico-funciono-asi-que-esta-mujer-recurrio-a-un-enemigo-natural-de-las-bacterias-para-salvar-la-vida-de-su-marido/">
                            <img src="img/noticias/bacteria.jfif" alt="noticica">
                        </a>
                    </div>
                </div>

                <div class="card border-dark mb-3 m-2 col-4" style="max-width: 19rem;">
                    <div class="card-header mt-1 text-center">Clima</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Protegete del Sol</h5>
                        <a href="https://www.biobiochile.cl/noticias/salud-y-bienestar/cuerpo/2023/12/06/ante-inminente-ola-de-calor-en-regiones-que-recomendaciones-seguir-para-capear-temperaturas-extremas.shtml">
                            <img src="img/noticias/clima.jpeg" alt="noticica">
                        </a>
                      </div>
                </div>

                <div class="card border-dark mb-3 m-2 col-4" style="max-width: 19rem;">
                    <div class="card-header mt-1 text-center">Salud</div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Recuerda Descansar</h5>
                        <a href="https://www.latercera.com/tendencias/noticia/asi-se-practica-el-inemuri-la-potente-siesta-japonesa-que-te-dara-un-golpe-de-energia-en-solo-unos-minutos/W7CSEWPG7RB23NECX6OBAE6IBA/">
                            <img src="img/noticias/salud.jpg" alt="">
                        </a>
                    </div>
                </div>

                <div class="card border-dark mb-3 m-2 col-4" style="max-width: 19rem;">
                    <div class="card-header mt-1 text-center">Bienestar</div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Cuidados Personales</h5>
                        <a href="https://salud.nih.gov/recursos-de-salud/nih-noticias-de-salud/el-cuidado-del-cancer-se-vuelve-personal">
                            <img src="img/noticias/bienestar.png" alt="">
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('modals')
    <!-- Modal Reservar Hora-->
    <div class="modal fade" id="reservarHora" tabindex="-1" aria-labelledby="reservarHora" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="reservarHora">Solicitud de Hora Medica</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">

                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="inputNombre" class="form-label">Nombre Completo:</label>
                                    <input type="text" class="form-control" id="inputNombre" aria-describedby="inputNombre" placeholder="EJ: Patricio Leon Ormazabal" required>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="inputCorreo" class="form-label">Correo:</label>
                                    <input type="email" class="form-control" id="inputCorreo" aria-describedby="inputCorreo" placeholder="EJ: informatica@chilechico.cl">
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="inputTelefono" class="form-label">Telefono:</label>
                                    <input type="number" class="form-control" id="inputTelefono" aria-describedby="inputTelefono" placeholder="EJ: +56937213799" required>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-10 mb-3">
                                <label for="inputEspecialidad" class="form-label">Especialidad:</label>
                                <select class="form-select" aria-label="Default select example" id="inputEspecialidad">
                                    <option selected value = "0">Selecciona una Especialidad</option>
                                    <option value= "Odontologia">Odontologia</option>
                                    <option value= "Imagenologia">Imagenologia</option>
                                    <option value= "Consulta General">Consulta General</option>
                                </select>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="inputFecha" class="form-label">Seleccione Fecha:</label>
                                    <input type="datetime-local" class="form-control" id="inputFecha" aria-describedby="inputFecha" required>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="inputComentario" class="form-label">Motivo de la Consulta:</label>
                                    <textarea class="form-control" aria-label="With textarea" id="inputComentario"></textarea>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="buttonCerrarModal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="buttonEnviarSolicitud">Solicitar Hora Medica</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Modificar Hora-->
    <div class="modal fade" id="modificarHora" tabindex="-1" aria-labelledby="modificarHora" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modificarHora">Solicitud Modificar Hora Medica</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">

                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="inputModificarNombre" class="form-label">Nombre Completo:</label>
                                    <input type="text" class="form-control" id="inputNombre" aria-describedby="inputNombre" placeholder="EJ: Patricio Leon Ormazabal" required>
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="inputModificarCorreo" class="form-label">Correo:</label>
                                    <input type="email" class="form-control" id="inputCorreo" aria-describedby="inputCorreo" placeholder="EJ: informatica@chilechico.cl">
                                </div>
                            </div>
                        </div>

                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="inputModificarTelefono" class="form-label">Telefono:</label>
                                    <input type="number" class="form-control" id="inputTelefono" aria-describedby="inputTelefono" placeholder="EJ: +56937213799" required>
                                </div>
                            </div>
                        </div>


                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="inputModificarComentario" class="form-label">Motivo Modificacion:</label>
                                    <textarea class="form-control" aria-label="With textarea" id="inputComentario"></textarea>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="buttonCerrarModal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="buttonEnviarSolicitud">Solicitar Modificacion Hora Medica</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('includes.footer')
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#buttonReservarHora').on('click', function(){ limpiarForm();  })

            $('#buttonEnviarSolicitud').on('click', function(){
                bloquearPantalla();

                let nombre = $('#inputNombre').val();
                let correo = $('#inputCorreo').val();
                let especialidad = $('#inputEspecialidad').val();
                let fechaCompleta = $('#inputFecha').val();
                let descripcion = $('#inputComentario').val();
                let telefono = $('#inputTelefono').val();
                let segmentoFecha = fechaCompleta.split('T')[0];
                let hora = fechaCompleta.split('T')[1];
                let fecha = segmentoFecha.split('-').reverse().join('-');
                let resultadoValidacion = validationForm(nombre, correo, especialidad, telefono, hora);

                $.ajax({
                    type: 'POST',
                    url: baseClinica + '/sendMail',
                    data: {
                            "_token": "{{ csrf_token() }}",
                            nombre: nombre,
                            correo: correo,
                            especialidad: especialidad,
                            fecha: fecha,
                            hora: hora,
                            descripcion: descripcion,
                            telefono: telefono,
                            validacionFront: resultadoValidacion
                        },
                    dataType: 'JSON',
                    success: function(result){
                        (result.status === 200) ? $("#reservarHora").modal("hide") : console.log(result)
                        desbloquearPantalla();
                        leonAlert(result)
                    }
                });
            })

            $('#buttonEnviarSolicitud').on('click', function(event){
                event.preventDefault();

                bloquearPantalla();
                let nombre = $('#inputModificarNombre').val();
                let correo = $('#inputModificarCorreo').val();
                let telefono = $('#inputModificarTelefono').val();
                let comentario = $('#inputModificarComentario').val();
                $.ajax({
                    type: 'POST',
                    url: baseClinica + '/sendModifiMail',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        nombre: nombre,
                        correo: correo,
                        telefono: telefoo,
                        comentario: comentario,
                    },
                    dataType: 'JSON',
                    success: function(result){

                        //desbloaquearPantalla();
                        //leonAlert(result);
                    }
                });
            });

        });
    </script>
@endsection
