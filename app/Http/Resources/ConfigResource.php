<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConfigResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description ,
            'logo' => $this->logo ,
            'favicon' => $this->favicon ,
            'facebook'=>$this->facebook,
            'hotline' => $this->hotline ,
            'email' => $this->email,
            'address' => $this->address,
            'map' => $this->map,
        ];
    }
}
