<?php

namespace App\Http\Controllers;

use App\Mail\SendingMail;
use App\Notifications\SoliciteHours;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{

    use Notifiable;
    public function mailProcess(Request $request) {
       $nombre = $request->get('nombre');
       $correo = $request->get('correo');
       $especialidad = $request->get('especialidad');
       $fecha = $request->get('fecha');
       $descripcion = $request->get('descripcion');
       $telefono = $request->get('telefono');
       $hora = $request->get('hora');

       $dataTomarHora = array(
           'nombre' => $nombre,
           'correo' => $correo,
           'especialidad' => $especialidad,
           'fecha' => $fecha,
           'hora' => $hora,
           'descripcion' => $descripcion,
           'telefono' => $telefono
       );
        $response = $this->sendMail($dataTomarHora);

        return $response;
    }

    protected function sendMail($data){
//      $newHour = ([
//          'nombre' => $data['nombre'],
//          'correo' => $data['correo'],
//          'especialidad' => $data['especialidad'],
//          'fecha' => $data['fecha'],
//          'hora' => $data['hora'],
//          'descripcion' => $data['descripcion'],
//          'telefono' => $data['telefono']
//      ]);
      //Cambiar al correo de la clinica
        Mail::to('informatica@chilechico.cl')->send(new SendingMail($data));

        return response()->json(['status' => 200]);
    }

}
