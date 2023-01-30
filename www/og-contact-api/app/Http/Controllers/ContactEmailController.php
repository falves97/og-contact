<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEmailRequest;
use App\Mail\ContactMail;
use App\Mail\ReceivedEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactEmail;

class ContactEmailController extends Controller
{
    public function store(ContactEmailRequest $request) {
        $validated = $request->validated();
        $contactEmail = new ContactEmail($validated);
        $contactEmail->save();

        Mail::to('f.braga.alves1@gmail.com')->send(new ContactMail($contactEmail));
        Mail::to($contactEmail->email)->send(new ReceivedEmail());
    }
}
