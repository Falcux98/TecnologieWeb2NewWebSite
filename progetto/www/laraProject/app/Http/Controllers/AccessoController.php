<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessoController extends Controller
{
    public function mostraLogin(){
        return view('loginregistrati');
    }

    public function gestisciLogin(Request $request){

        $this->validate($request, [
            'username' => 'required|username',
            'password' => 'required|alphaNum|min:3'
        ]);

        $dati_utente = array(
            'username' => $request->get('username'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($dati_utente)){
            return redirect('/accesso/loginok');
        }
    }

    public function loginok(){
        return view('privacypolicy');
    }
}
