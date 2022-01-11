<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrdinacijaResource extends JsonResource
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
            'Naziv ordinacije' => $this->resource->naziv_ordinacije,
            'Kapacitet' => $this->resource->kapacitet,
            'Vlasnik ordinacije' => $this->resource->vlasnik,
            'Website' => $this->resource->website
        ];
    }
}
