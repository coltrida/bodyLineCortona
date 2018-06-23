<?php

namespace App\Http\Controllers;

use function dd;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{

    protected $rules = [
        'content' => 'required',
        'consenso' => 'required',
        'mailfrom' => 'required|email'
    ];

    protected $errorMessages = [
        'content.required' => 'Il campo Messaggio è obbligatorio',
        'consenso.required' => 'Il consenso deve essere selezionato',
        'mailfrom.required' => 'Il campo mail è obbligatorio',
        'mailfrom.email' => 'Il campo mail non è corretto'
    ];

    public function send(Request $req)
    {
        $this->validate($req, $this->rules, $this->errorMessages);

        $title = $req->input('title');

        $content = $req->input('content');
        $mailfrom = $req->input('mailfrom');


        Mail::send('mails.testemail',
            [
                'title' => $title,
                'mailfrom' => $mailfrom,
                'content' => $content
            ], function ($message)
        {
            $subject = "Messaggio inviato dal sito";
            $message->from('coltrida@gmail.com', "Bodyline");
            $message->to('coltrida@gmail.com');
            $message->subject($subject);
        });

        //return response()->json(['message' => 'Request completed']);
        return 1;
    }
}
