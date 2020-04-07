<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BalasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        // dd($this);
        return [
            'id' => $this->id,
            'reply' => $this->body,
            // 'user' => $this->user->name,
            'created_at' => $this->created_at
        ];
    }
}
