<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            // 'phone' => 'required|numeric',
            // 'password' => 'required|string|min:6|confirmed',
        ]);
        $user = new User;
        $request['password'] = bcrypt($request->password);
        $user = User::create($request->all());
        $user->email_verified_at = Carbon::now();
        $user->roles()->sync($request->role);
        $user->save();
        $notification = array(
        'message' => 'User added successfully',
        'alert-type' => 'info'
        );
        return redirect(route('users.index'))->with($notification);
    }
}
