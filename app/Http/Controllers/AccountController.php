<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Hash;

class AccountController extends Controller
{
    public function storeUser(Request $request) {
        $rules = [
            'username' => 'required | unique:users,email',
            'first-name' => 'required',
            'password' => 'required|min:8|same:password2'
        ];
        $messages = [
            'password.same' => 'The passwords must match!',
        ];
        $validation = $request->validate($rules, $messages);

        // all works

        $userData = [
            'email' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
            'name' => $request->get('first-name'),
            'surname' => $request->get('last-name'),

        ];
        DB::table('users')->insert($userData);
        Session::flash('success', 'Registration was successful!');
        return redirect()->back();
    }

    public function saveChatMessage(Request $request){
        $messageData = [
            'username' => $request->get('username'),
            'text' => $request->get('text'),
            'created_at' => date('Y-m-d H:i:s'),
            'modiefied_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('messages')->insert($messageData);
        return ['status' => 'ok'];
    }

    public function getChatMessages() {
        return DB::table('messages')->get();
    }
}
