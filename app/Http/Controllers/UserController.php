<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ville;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = Ville::selectVilles();
        return view('auth.create',['villes' => $villes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{

    // Validation des données pour le modèle Etudiant et user
    $validatedData = $request->validate([
        'nom' => 'required|min:2|max:50',
        'adresse' => 'required|min:2|max:250',
        'phone' => 'required|regex:/^\d{3}\s\d{3}-\d{4}$/',
        'date_naissance' => 'required|date',
        'ville_id' => 'required|exists:villes,id',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
        'password_confirmation' => 'required|same:password',
    ]);


try {
    $user = User::create([
    'email' => $validatedData['email'],
    'password' => Hash::make($validatedData['password']),
    ]);
} catch (Exception $e) {
    $errorMessage = $e->getMessage();
    return redirect()->back()->with('error', $errorMessage)->withInput();
}

try {
    $etudiant = $user->etudiant()->create([
    'id'=>  $user->id,
    'nom' => $validatedData['nom'],
    'adresse' => $validatedData['adresse'],
    'phone' => $validatedData['phone'],
    'date_naissance' => $validatedData['date_naissance'],
    'ville_id' => $validatedData['ville_id'],
]);
} catch (Exception $e) {
    $user->delete();
    $errorMessage = $e->getMessage();
    return redirect()->back()->with('error', $errorMessage)->withInput();
}

  return redirect(route('login'))->withSuccess(trans('create_user.text_success_user'));


}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
