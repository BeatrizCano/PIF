<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMailable;


class FormController extends Controller {
    public function sendForm(Request $request) {
        return view('confirmation');
    }
}