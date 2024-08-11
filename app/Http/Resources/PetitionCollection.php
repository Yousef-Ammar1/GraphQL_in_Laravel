<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PetitionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {

        //You need to use the
        //return new PetitiCollection(Petition::all());
        //to be able to show the data below
        //If you choose to use the
        //Petition::colllection(Petition::all()); It won't show the below data
        return [
            'data' => $this->collection,
            'versoin' => '0.1.1',
            'author' => 'Yousef'
        ];
    }
}
