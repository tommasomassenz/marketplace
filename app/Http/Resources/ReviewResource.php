<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            'user_id' => $this->user_id,
            'product_id' => $this->product_id,
            'score' => $this->score,
            'comment' => $this->comment,
            'review_date' => $this->review_date,
        ];
    }
}
