<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            #Definizione dei campi che restituisce quando chiamo una get per tutti gli user
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
        ];
    }
}
