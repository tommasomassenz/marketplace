<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

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
