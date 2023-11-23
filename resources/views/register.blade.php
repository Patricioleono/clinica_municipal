@extends('layouts.app')

@section('registerUser')

<div class="container">
    <div class="abs-center">
        <form class="border p-3 form">
            <h2 class="mb-3">Ingreso Nuevos Usuarios</h2>
            <div class="form-group">
                <label for="completeName">Nombre Completo:</label>
                <input type="text" name="completeName" id="completeName" class="form-control" placeholder="Ej: Patricio Leon Ormazabal">
            </div>
            <div class="form-group mt-3">
                <label for="email">Usuario:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Ej: informatica@chilechico.cl">
            </div>
            <div class="form-group mt-3">
                <label for="password">Contraseña:</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Ej: Patricio92">
                <p class="border border-danger p-3 mt-2">
                    la contraseña debe tener al menos 6 caracteres, letras MAYUSCULAS, letras minusculas y numeros
                </p>
            </div>
            <button class="btn btn-outline-success mt-1" id="createUser">Crear Nuevo Usuario</button>
        </form>
    </div>
</div>
    
@endsection

@section('scriptRegisterUser')
<script>
    $(document).ready(function() {
        $('#completeName').focus();

        $("#createUser").click(function(e) {
            bloquearPantalla();
            e.preventDefault();

            let completeName = $('#completeName').val();
            let newEmail = $('#email').val();
            let newPassword = $('#password').val();

            let resultValidation = validationLogIn(newEmail, newPassword);
            
            $.ajax({
                type: 'POST',
                    url: '/clinica/newUser',
                    data: { 
                        _token: "{{ csrf_token() }}",
                        completeName: completeName,
                        newEmail: newEmail,
                        newPassword: newPassword,
                        validation: resultValidation
                    },
                    dataType: 'JSON',
                    success: function(result){
                        leonAlert(result);
                        desbloquearPantalla();
                    }     
            });
        });
    });

</script>
@endsection