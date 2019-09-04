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
          'name' => 'required',
          'email' => 'required|email',
          'telephone' => 'required',
          'message' => 'min:10']);
        $data = array(
          'name' => $request->firstname,
          'email' => $request->email,
          'telephone' => $request->telephone,
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
