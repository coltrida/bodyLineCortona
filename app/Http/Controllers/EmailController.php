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

    protected $rules2 = [
        'nome' => 'required',
        'consenso' => 'required',
        'mailfrom' => 'required|email',
        'cv' => 'mimes:pdf,doc,docx'
    ];

    protected $errorMessages = [
        'content.required' => 'Il campo Messaggio è obbligatorio - invio non riuscito',
        'nome.required' => 'Il campo Nome è obbligatorio - invio non riuscito',
        'consenso.required' => 'Il consenso deve essere selezionato - invio non riuscito',
        'mailfrom.required' => 'Il campo mail è obbligatorio - invio non riuscito',
        'mailfrom.email' => 'Il campo mail non è corretto - invio non riuscito',
        'cv.mimes' => 'Tipo di file allegato non corretto - invio non riuscito'
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
            $message->to('azul108@gmail.com');
            $message->subject($subject);
        });

        //return response()->json(['message' => 'Request completed']);
        return 1;
    }

    public function inviacv(Request $req)
    {
        $this->validate($req, $this->rules2, $this->errorMessages);

        $nome = $req->input('nome');
        $mailfrom = $req->input('mailfrom');
        $messaggio = $req->input('messaggio');
        $job = $req->input('job');
        $fileName = '';

        if($req->hasFile('cv')){
            $file = $req->file('cv');
            if(!$file->isValid()){
                return false;
            }
            $fileName = $nome.'.'.$file->extension();

            $file->storeAs('cv', $fileName);
        }

        Mail::send('mails.testemail',
            [
                'title' => $nome,
                'mailfrom' => $mailfrom,
                'content' => $messaggio
            ], function ($message) use ($fileName, $job)
            {
                $subject = "CV Inviato per: ".$job;
                $message->from('coltrida@gmail.com', "Bodyline");
                $message->to('azul108@gmail.com');
                $message->subject($subject);
                if($fileName != '') {
                    $message->attach("storage/cv/$fileName");
                }
            });

        //return response()->json(['message' => 'Request completed']);
        $messaggio = 'Candidatura inviata Correttamente';
        session()->flash('message', $messaggio);
        return redirect()->route('jobs');
    }
}
