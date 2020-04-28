<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;


class MessagesController extends Controller
{
    public function submit(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required'
           
        ]);
       //create message
       $message = new Message;

       $message->name = $request->input('name');
       $message->email = $request->input('email');
       $message->Message = $request->input('message');

       $message->save();

       return redirect('/')->with('success', 'db updated');

    }

    public function getmessage(){
        $message= Message::all();

        return view('storemessages')->with('messages', $message);
    }
}
