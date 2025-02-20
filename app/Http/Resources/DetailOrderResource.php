<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DetailOrderResource extends JsonResource
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
            'id' => $this->id,
            'order_id' => $this->order_id,
            'user_id' => $this->user_id,
            'product_id' => $this->product_id,
        ];
    }
}
