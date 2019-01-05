<?php

namespace App\Http\Controllers;

use App\model\reviews;
use App\model\product;
use Illuminate\Http\Request;
use  App\Http\Resources\reviewsresource;
     
class ReviewsController extends Controller
{     
    
    public function index(product $product)
    {
        
        $data = product::find($product->id);
        //dd($data);
         if (!$data) 
        {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Product with id ' .$id . ' not found'
                ], 400);
        }

        $data = $product->reviews;
        return reviewsresource::collection($data);
       
    }


    public function create()
    {
        //
    }

    
    public function store(Request $request ,product $product)
    {
        

        $data = new reviews;
        $data->product_id = $product->id;
        $data->customer = $request->customer;
        $data->review = $request->review;
        $data->star = $request->star;
        $data->save();
        //$data = $product->id;

        return response()->json([

                                    "status"=>"Add Reviews success",
                                    "data"=>$data,
                                ]);
    
    }


    public function show(reviews $reviews)
    {
       
            $data = $reviews->all();
            return response()->json($data);
        
    }

    public function edit(reviews $reviews)
    {
        //
    }

    public function update(Request $request, reviews $reviews)
    {
        //
    }

    public function destroy($id)
    {

        
       
       $data = reviews::find($id);
       $data->delete();
       return response()->json([

                                    "status"=>"delete Reviews success",
                                    
                                ]);

                
    

    }
    public function delete(product $product,reviews $reviews)
    {

        
       
       $data = reviews::find($reviews);
       $data->delete();
       return response()->json([

                                    "status"=>"delete Reviews success",
                                    
                                ]);

                
    

    }
}
