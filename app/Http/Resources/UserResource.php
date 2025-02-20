<?php

namespace App\Http\Resources;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            #Definizione dei campi che restituisce quando chiamo una get per tutti gli user
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,

        ];
    }
}
