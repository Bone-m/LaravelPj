<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sumbit(ContactRequest $request) {
        $contact = new Contact();
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->subject=$request->input('subject');
        $contact->message=$request->input('message');
        $contact->save();
        return redirect()->route('home')->with('success', ' Сообщение отправлено! ');
    }
    public function allData(){
        return view('messages', ['data'=>Contact::all()]);

    }
}
