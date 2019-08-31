<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
  ////////////////////////////
      public function ContactPage()
      {
          return view('contact');
      }
      public function postContact(Request $request)
      {
        $this->validate($request, [
          'firstname' => 'required',
          'lastname' => 'required',
          'telephone' => 'required',
          'email' => 'required|email',
          // 'subject' => 'min:3',
          'message' => 'min:10']);
        $data = array(
          'firstname' => $request->firstname,
          'lastname' => $request->lastname,
          'telephone' => $request->telephone,
          'email' => $request->email,
          'subject' => 'New Contact form',
          'bodyMessage' => $request->message
          );
        Mail::send('emails.contact', $data, function($message) use ($data){
          $message->from($data['email']);
          $message->to('jordantsap@hotmail.gr');
          $message->subject($data['subject']);
        });
        Session::flash('success', 'Ευχαριστούμε, το μύνημα σας εστάλη!');
        return redirect(route('contact'));
      }

}
