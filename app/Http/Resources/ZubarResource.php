<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ZubarResource extends JsonResource
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
            'Godine iskustva' => $this->resource->godine_iskustva,
            'Ordinacija' => new OrdinacijaResource($this->resource->ordinacija)
        ];
    }
}
