<?php

namespace App\Http\Controllers;


use App\Http\Resources\product\ProductResource;
use App\Http\Resources\product\productCollection;
use App\model\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        return productCollection::collection(product::all());
    }

    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $data = new product;
        $data->name = $request->name;
        $data->detail = $request->detail;
        $data->price=$request->price;
        $data->stock=$request->stock;
        $data->discount=$request->discount;
        $data->save();
        //return "add suceess";
        return response()->json([
            'status'=>'add success',
            'data'=>$data,

        ]);
    }

   
    public function show($id)
    {
      // dd($product);
        //$data  = product::find($id);
        $data = product::find($id);

        if (!$data) 
        {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Product with id ' .$id . ' not found'
                ], 400);
        }
        return response()->json(
            [
                'success' => true,
                'data' => $data->toArray()
            ], 400);
        
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
         
            $data  = product::find($id);

            if (!$data) 
            {
                return response()->json(
                    [
                        'success' => false,
                        'message' => 'Product with id ' . $id . ' not found'
                    ], 400);
            }

            $updated = $data->fill($request->all())->save();
            
            return response()->json([
                                        'status'=>'update success',
                                        'data'=>$data,

                                    ]);
    }

    
    public function destroy($id)
    {
        $data = product::find($id);
        if (!$data)
        {
            return response()->json(
                [
                    'success' => false,
                    'message' => 'Product with id ' . $id . ' not found'
                ], 400);
        }
        $data->delete();
        return response()->json([
                                        'status'=>'Delete success',
                                        'data'=>$data,

                                ]);
    }
}
