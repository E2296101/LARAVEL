<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('auth.login');
    }

 public function authentification(Request $request)
{
    $request->validate([
        'email' => 'required|email|exists:users',
        'password' => 'required',
    ]);

    $credentials = $request->only('email', 'password');

    if (!Auth::validate($credentials)) {
        return redirect()->back()->withErrors(trans('auth.password'));
    }

    $user = Auth::getProvider()->retrieveByCredentials($credentials);
   $user->etudiant;

  /*   if ($etudiant) {
        $user->name= $etudiant->nom;
    
    } */
    //return  $user;

    Auth::login($user);

    return redirect()->intended('/');
}


    public function deconnexion(){
         Auth::logout();
        return redirect(route('login'));
    }

  
}
