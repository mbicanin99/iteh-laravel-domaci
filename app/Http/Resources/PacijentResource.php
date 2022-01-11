<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PacijentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'ID' => $this->resource->id,
            'Ime' => $this->resource->ime,
            'Prezime' => $this->resource->prezime,
            'Broj kartona' => $this->resource->broj_kartona,
            'Adresa' => $this->resource->adresa,
            'Grad' => $this->resource->grad,
            'Zubar' => new ZubarResource($this->resource->zubar)
        ];
    }
}
