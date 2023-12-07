<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendingMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    //Inyectar variables que nos llegan
    public function __construct(private array $newHour)
    {

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        if($this->newHour['tipo'] == 'solicitar'){
            return new Envelope(
                subject: 'Solicitud Hora Medica',
            );
        }else if($this->newHour['tipo'] == 'modificar'){
            return new Envelope(
                subject: 'Solicito Modificar Hora Medica',
            );
        }
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        if($this->newHour['tipo'] == 'solicitar'){
            return new Content(
                //recuerda que las vistas funcionan con blade
                view: 'mail.template',
                with: [
                        'nombre' => $this->newHour['nombre'],
                        'correo' => $this->newHour['correo'],
                        'especialidad' => $this->newHour['especialidad'],
                        'fecha' => $this->newHour['fecha'],
                        'hora' => $this->newHour['hora'],
                        'descripcion' => $this->newHour['descripcion'],
                        'telefono' => $this->newHour['telefono']
                ]
            );
        }else if($this->newHour['tipo'] == 'modificar'){
            return new Content(
                view:'mail.template',
                with: [
                        'nombre' => $this->newHour['nombre'],
                        'correo' => $this->newHour['correo'],
                        'especialidad' => $this->newHour['especialidad'],
                        'fecha' => $this->newHour['fecha'],
                        'hora' => $this->newHour['hora'],
                        'descripcion' => $this->newHour['descripcion'],
                        'telefono' => $this->newHour['telefono']
                ]
            );
        }
        
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
