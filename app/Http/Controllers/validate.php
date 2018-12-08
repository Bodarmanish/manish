<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\myform;

class validate extends Controller
{
    public function myform()
    {
        return view("form.myform");

    }
    public function submitmyform(myform $request)
    {
       /* $this->validate($request,["name"=>"required",
                                    "email"=>"required|email|unique:user",
                                    "age"=>"required|numeric"],
                                 
                                    ["name.required"=>"Enter the Name",
                                    "email.required"=>"Enter the Email",
                                    "age.required"=>"Enter the Age"
                                    ]);*/

        //print_r($request->all());

        $data =['name'=>$request->get('name'),'email'=>$request->get('email'),'age'=>$request->get('age')];
       
		foreach($data as $datas) 
		{
			echo $datas."<br/>";
            			
		}
  

    }


}
