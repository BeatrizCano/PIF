<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMailable;//cambiar esto por el nombre de tu mailable


class FormController extends Controller {
    public function sendForm(Request $request) {
        //Procesar y validar el formulario

        //Enviar el correo electronico

        // Luego de enviar el formulario, puedes redirigir a una página de confirmación o simplemente mostrar un mensaje
        return view('confirmation');
    }
}