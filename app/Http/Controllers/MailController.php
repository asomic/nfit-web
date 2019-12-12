<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactForm;

class MailController extends Controller
{
    public function contactForm(Request $request)
    {
        Mail::to('contacto@nfit.app')->send(new ContactForm($request));

    }
}
