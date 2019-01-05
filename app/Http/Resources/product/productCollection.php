<?php

namespace App\Http\Resources\product;

use Illuminate\Http\Resources\Json\Resource;

class productCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       
        $data = [
            'name'=> $this->name,

            'TotalPrice' => round((1-($this->discount/100)) * $this->price,2),

            'rating' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No rating yet',

            'href'=>[
                        'show review' => route('reviews.index',$this->id)
                    ],

        ];
            //return print_r($data);
            // echo $data['name'];
             return response()->json([
                                         'product id'=>$this->id,
                                         'data'=>$data,

                                     ]);
    }
}
