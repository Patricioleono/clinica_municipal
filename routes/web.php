<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Primera Vista Indice
Route::get('/', function () {
    return view('principalSection');
});


Route::controller(MailController::class)->group( function() {
    Route::post('/sendMail', 'mailProcess');
});

Route::controller(LoginController::class)->group(function() {
    Route::get('/clinica/login', 'index');
    Route::get('/clinica/registroUsuario', 'viewRegisterUser');

    Route::post('/clinica/ingreso', 'login');
    Route::post('/clinica/newUser', 'registerNewUser');
});

Route::controller(DashboardController::class)->group(function() {
    Route::get('/clinica/dashboard', 'index');
});

