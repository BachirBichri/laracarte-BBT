<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormMail;
use App\Models\Message;

use Illuminate\Support\Facades\Mail;


class MessageController extends Controller
{
    public function create()
    {
        return view('message.create');
    }

    public function store(ContactFormRequest $request)
    {
        $message = Message::create($request->only(['name', 'email', 'message']));
        Mail::to('bachir@laracarte.com')->send( new ContactFormMail($message));
        return 'Done';
    }
}
