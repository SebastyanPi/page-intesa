<?php

namespace App\Http\Controllers;
use App\Models\interested;
use App\Mail\ContactMailable;
use App\Mail\WhatsappMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InterestedController extends Controller
{
    //

    public function register(Request $request){
        interested::create([
            'names' => $request->names, 
            'lastname' => $request->lastname, 
            'email' => $request->email, 
            'phone' => $request->phone, 
            'message' => $request->message
        ]);

        Mail::to('academia@institutointesa.edu.co')->send(new ContactMailable($request->names, $request->lastname, $request->email, $request->phone, $request->message));
        Mail::to('mipiro2016@gmail.com')->send(new ContactMailable($request->names, $request->lastname, $request->email, $request->phone, $request->message));

        return redirect()->route('pages.contactos');
    }


    public function WhatsApp(Request $request){
        Mail::to('academia@institutointesa.edu.co')->send(new WhatsappMailable($request->phone));
        Mail::to('mipiro2016@gmail.com')->send(new WhatsappMailable($request->phone));
        
        return redirect()->route('pages.contactos');
    }
}
