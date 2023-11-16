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
        return new Envelope(
            subject: 'Solicitud Hora Medica',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            //ruta, View/carpetaDestino/nombreArchivo
            view: 'mail.template',
            with: [
                    'nombre' => $this->newHour['nombre'],
                    'correo' => $this->newHour['correo'],
                    'especialidad' => $this->newHour['especialidad'],
                    'fecha' => $this->newHour['fecha'],
                    'hora' => $this->newHour['hora'],
                    'descripcion' => $this->newHour['descripcion']
            ]
        );
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
