<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            #Definizione dei campi che restituisce quando chiamo una get per tutti gli user
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,

        ];
    }
}
