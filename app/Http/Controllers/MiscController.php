<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;

class MiscController extends Controller
{
        public function sendmail(Request $request){
        $this->validate($request, [
                'email' => 'required|email',
                'name' => 'required|min:2|max:100',
                'message' => 'required|min:2',
                'subject' => 'required|min:2'
            ]);

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->message,
            'name' => $request->name
        ];

        Mail::send('emails.sitemail', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('delfinajewels@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Пораката е пратена.');

        return redirect('/');
    }
}
