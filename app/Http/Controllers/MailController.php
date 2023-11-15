<?php

namespace App\Http\Controllers;

use App\Notifications\SoliciteHours;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;

class MailController extends Controller
{

    use Notifiable;
    public function mailProcess(Request $request) {
       $nombre = $request->get('nombre');
       $correo = $request->get('correo');
       $especialidad = $request->get('especialidad');
       $fecha = $request->get('fecha');
       $descripcion = $request->get('descripcion');
       $hora = $request->get('hora');

       $dataTomarHora = array(
           'nombre' => $nombre,
           'correo' => $correo,
           'especialidad' => $especialidad,
           'fecha' => $fecha,
           'hora' => $hora,
           'descripcion' => $descripcion
       );
        $this->sendMail($dataTomarHora);

        return response()->json([$dataTomarHora]);
    }

    protected function sendMail($data){
      $newHour = ([
          'nombre' => $data['nombre'],
          'correo' => $data['correo'],
          'especialidad' => $data['especialidad'],
          'fecha' => $data['fecha'],
          'hora' => $data['hora'],
          'descripcion' => $data['descripcion']
      ]);

    }
}
