<?php

namespace App\Http\Controllers;

use function dd;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function send(Request $req)
    {
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
            $message->from('coltrida@gmail.com', 'pippo');
            $message->to('coltrida@gmail.com');
        });

        //return response()->json(['message' => 'Request completed']);
        return 1;
    }
}
