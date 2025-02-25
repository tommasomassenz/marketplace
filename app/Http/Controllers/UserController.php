<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    //funzione per la visualizzazione di tutti gli utenti
    public function index()
    {
        return UserResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida i dati in entrata
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'first_name' => 'string|max:255',
            'last_name' => 'string|max:255',
            'birth_day' => 'date',
            'registration_day' => 'date',
            'address' => 'string|max:255',
            'phone_number' => 'string|max:255',
        ]);

        // Crea un nuovo utente
        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => $validatedData['password'],
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'birth_day' => $validatedData['birth_day'],
            'registration_day' => $validatedData['registration_day'],
            'address' => $validatedData['address'],
            'phone_number' => $validatedData['phone_number'],
        ]);

        return response()->json(['message' => 'User created successfully', 'data' => $user], 201);
    }

    public function login(Request $request)
    {
        // Valida la richiesta
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Recupera l'utente tramite email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'Utente non trovato'], 404);
        }

        // Confronta la password inserita con quella nel database (senza criptografia)
        if ($request->password !== $user->password) {
            return response()->json(['message' => 'Credenziali errate'], 401);
        }

        // Autenticazione riuscita
        return response()->json(['message' => 'Login effettuato con successo'], 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        /*  $request->validate([
        'username' => 'required|string|max:50',
        'email' => 'required|email|unique:users,email,' . $id,
      ]);
      $post = Post::find($id);
      $post->update($request->all());
      return redirect()->route('posts.index')
        ->with('success', 'Post updated successfully.'); */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // Elimina lo user
        $user->delete();

        return response()->json(['message' => 'User successfully deleted.'], 200);
    }
}
