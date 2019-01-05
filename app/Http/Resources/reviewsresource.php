<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class reviewsresource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // $data = $request->all();
        //  return response()->json($data);

        if(!empty($this->customer))
        {
            $data = [
                        'id'=>$this->id,
                        'customer'=>$this->customer,
                        'review'=>$this->review,
                        'star'=>$this->star,


                    ];
            return response()->json($data);
        }
        elseif (empty($this->customer))  {
                return response()->json("NO data found");
            }    
    }
}
