<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

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

        $user = User::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "User created successfully!",
            'user' => $user
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'username' => 'required|string|max:50',
        'email' => 'required|email|unique:users,email,' . $id,
      ]);
      $post = Post::find($id);
      $post->update($request->all());
      return redirect()->route('posts.index')
        ->with('success', 'Post updated successfully.');
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
