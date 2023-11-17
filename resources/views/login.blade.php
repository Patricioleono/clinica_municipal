@extends('layouts.app')

@section('clincaLogin')
    <div class="container">
        <div class="abs-center">
            <form action="#" class="border p-3 form">
                <a class="navbar-brand me-5 align-center" href="" style="width: 10%; height: 110px">
                    <img src="../img/logoMuniS.png" alt="Logo Clinica" class="w-100" >
                </a>

                <div class="form-group">
                    <label for="email">Usuario:</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group mt-3">
                    <label for="password">Contraseña:</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-outline-secondary mt-3">Solicitar Usuario</button>
                <button type="submit" class="btn btn-outline-success mt-3">Ingresar</button>
            </form>
        </div>
    </div>
@endsection

@section('scriptLogin')
    <script>

    </script>
@endsection