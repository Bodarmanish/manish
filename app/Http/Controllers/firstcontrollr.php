<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\items;




class firstcontrollr extends Controller
{

	




	public function query()
	{
			//$data = db::table("user")->insert([["name"=>"manish","email"=>"manish777@gmail.com"],
			//								   ["name"=>"sanjay","email"=>"sanjay6650@gmail.com"]]);
			//echo $data;
			//$data = db::table("user")->where(["id"=>8])->delete();
			//$data = db::table("user")->where(["id"=>6])->update(["id"=>2]);



			$data = db::table("user")->get();
			return view("firstview",compact("data"));

	}

	public function index()
	{

		
		
		$newuser = ["ajay","manish"];

		
		//return view("firstview",array ("friend"=>$newuser));
		return view("firstview",compact("newuser"));
	}
	public function insertorm()
	{

		
			$product1 = new items();
			$product1->name = "product5";
			$product1->quantity = 19;
			$product1->save();


	}

	public function allquery()
	{

		$itemsl = new items();
		$data = $itemsl->find([1,2]);
		compact("$data");

		foreach ($data as $datas) 
		{
			echo $datas->name." ".$datas->quantity."<br/>";
		
			
		}

	}
	 

	
    
}
