<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clinica Municipal</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>

<div id="bloquea" class="cargando d-none">
    <div class="spinner-border color-dark" role="status" style="margin-left: 2%;margin-top: 20%" ></div>
    <div class="color-dark ms-5">
        Cargando... Por Favor Espere...
    </div>
</div>

<!-- CLINICA LOGIN -->
@yield('clincaLogin')

<!-- PAGINA PRINCIPAL -->
@yield('header')
@yield('contentCarousel')
@yield('modals')
@yield('footer')

<!-- JavaScripts -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var regeX = /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/;

    function bloquearPantalla(){
        $('#bloquea').removeClass('d-none')
    }
    function desbloquearPantalla(){
        $('#bloquea').addClass('d-none')
    }

    function validationForm(nombre, correo, especialidad, telefono, hora){
        let revisarCorreo = regeX.exec(correo);

        if(nombre.length === 0 || correo.length === 0 || especialidad === 0 || telefono.toString().length === 0 || hora.toString().length === 0){
            return {'status': 'fcampos'}
        }else{
            let tramoHorario = hora.split(':')[0];

            if(nombre.length === 0 || nombre.length < 3) {
                return {'status': 'fnombre'}
            }else if(revisarCorreo === null){
                return {'status': 'fcorreo'}
            }else if(especialidad === 0){
                return {'status': 'fespecialidad'}
            }else if(telefono.toString().length > 14){
                return {'status': 'ftelefono'}
            }else if(tramoHorario.toString() < '08' || tramoHorario > 17){
                return {'status': 'fhora'}
            }

            return {'status': 200}
        }

    }
    function validationLogIn(email, pass){
        let validarCorreo = regeX.exec(email);
        if(validarCorreo === null || validarCorreo == undefined){
            return {'status': 'fcorreo'}
        }else if(pass.length === 0 || pass.length < 3){
            return {'status': 'fpasword'}
        }
        return {'status': 200}
    }

    function leonAlert(error){
        let type
        let title
        let text

        switch(error.status){
            case 'fnombre':
                type = 'error'
                title = 'Error al ingresar Nombre'
                text = 'el campo Nombre es muy corto / no ha sido ingresado'
                break
            case 'fcorreo':
                type = 'error'
                title = 'Error en Correo'
                text = 'error al ingresar correo, verifique lo ingresado'
                break
            case 'fhora':
                type = 'error'
                title = 'Error en Horario'
                text = 'la hora elegida se ecuentra fuera del horario de trabajo'
                break
            case 'fespecialidad':
                type = 'error'
                title = 'Error en selecicon de especialidad'
                text = 'no ha elegido especialidad'
                break
            case 'ftelefono':
                type = 'error'
                title = 'Error al ingresar telefono'
                text = 'verifique lo ingresado'
                break
            case 'fcampos':
                type = 'error'
                title = 'ERROR'
                text = 'Faltan Campos Importantes'
                break
            case 'fpasword':
                type = 'error'
                title = 'ERROR'
                text = 'Error al Ingresar Credenciales de Acceso'
                break
            default:
                //cae aqui cuando es 200
                type = 'success'
                title = 'Proceso Finalizado con Exito!'
                text = ' '
                break
        }

        Swal.fire({
            title: `${title}`,
            text: `${text}`,
            icon: `${type}`
        });
    }
</script>

@yield('script')
@yield('scriptLogin')

</body>
</html>
