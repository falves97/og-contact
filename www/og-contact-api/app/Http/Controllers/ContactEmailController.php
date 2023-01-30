<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEmailRequest;
use App\Mail\ContactMail;
use App\Mail\ReceivedEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactEmail;

class ContactEmailController extends Controller
{
    public function index() {
        return response()->json(ContactEmail::all());
    }

    public function store(ContactEmailRequest $request) {
        $validated = $request->validated();
        $contactEmail = new ContactEmail($validated);
        $contactEmail->save();

        Mail::to(env('MAIL_TO'))->send(new ContactMail($contactEmail));
        Mail::to($contactEmail->email)->send(new ReceivedEmail());
    }
}
