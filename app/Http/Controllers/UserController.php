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
        $user = User::all();
        return UserResource::collection($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    $user = User::create($request->all());

    return response()->json([
        'status' => true,
        'message' => "user Created successfully!",
        'user' => $user
    ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
