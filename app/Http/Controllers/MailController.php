<?php

namespace App\Http\Controllers;

use App\Mail\SendingMail;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use mysql_xdevapi\Exception;


class MailController extends Controller
{

    use Notifiable;
    public function mailProcess(Request $request) {
        $validacion = $request->get('validacionFront');

        try {
            if($validacion['status'] != 200){
                return $validacion;
            }else{
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
                return $this->sendMail($dataTomarHora);
            }

        }catch (Exception $error){
            return $error;
        }

    }

    protected function sendMail($data){
        Log::info('PREPARANDO ENVIO DE CORREO');

      //Cambiar al correo de la clinica
        Mail::to('informatica@chilechico.cl')->send(new SendingMail($data));

        Log::info('CORREO ENVIADO');
        return response()->json(['status' => 200]);
    }

}
