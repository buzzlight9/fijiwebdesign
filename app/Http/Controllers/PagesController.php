<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use Mail;
use Session;

class PagesController extends Controller
{
    public function postContact(Request $request)
    {
        $this->validate($request, 
        ['name' => 'required',
         'surname' => 'required',
         'email' => 'required|email',
         'phone' => 'required',
         'subject' => 'required|min:3',
         'message' => 'required|min:10'
        ]);
        
        $data = array
        (
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

        Mail::send('email.contact', $data, function($message) use ($data)
        {
            $message->from($data['email']);
            $message->to('matty7986@gmail.com');
            $message->subject($data['subject']);

            
        });
        return redirect('/success')->with('success', 'Message Sent');
    }

    public function successMessage()
    {
        return view('success');
    }
}
