<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class productResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'ID' => $this->id,
            'productName' => $this->title,
            'productImage' => $this->image,
            'price'=>$this->price
        ];
    }
}
