<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Validator;




class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::orderby("id","desc")->get();
        return view("student.index",compact("students"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("student.create");
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Store(Request $request)
    {     

        $data = $request->All();
        $file = $request->File("image");
        print_r($data);
        die;
            if($request->Hasfile("image"))
            {   
                $file->Move("public/upload/",$file->getClientoriginalname());

            }
            $data = validator::Make($request->All(),
                                    [
                                        "name"=>"required|max:255",
                                        "email"=>"required|max:255|unique:students|email",
                                        //"image"=>"required",

                                    ],
                                    [
                                        "name.required"=>"Please enter the name",
                                        "email.required"=>"Please enter the email",
                                        "email.unique"=>"Enter email is used",
                                        "email.email"=>"Enter a valid email",

                                    ])->validate();
                                    $obj = new student;
                                    $obj->name = $request->name;
                                    $obj->email = $request->email;
                                   
                                    if(!empty($file))
                                    {
                                        $obj->image = $file->getClientoriginalname();
                                    }
                                    $obj->created_dt = date("Y-m-d h:i:s");
                                    $is_saved = $obj->save();
                                    if($is_saved)
                                    {
                                        
                                        session()->flash("stdmessage","student has been inserted");
                                        return redirect("/student");
                                    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student1 = student::find($id);
        return view("student.edit",compact("student1"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
      
        $file = $request->file("image");
       // print_r($data);
        $data = validator::make($request->all(),
                                    [
                                        "name"=>"required|max:255",
                                        "email"=>"required|max:255|email",
                                        "image"=>"required",
                                    ],
                                    [
                                        "name.required"=>"Please enter the name",
                                        "email.required"=>"Please enter the email",
                                        "email.email"=>"Enter a valid email",
                                    ])->validate();
                                    
                                    $student = student::find($id);
                                    $student->name = $request->name;
                                    $student->email = $request->email;
                                    $student->image = $file->getClientoriginalname();
                                    $is_saved = $student->save();
                                    if($is_saved)
                                    {   
                                        session()->flash("stdmessage","Student has been update");
                                        return redirect("/student");
                                    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::find($id);
        $is_delete = $student->delete();
        if($is_delete)
        {   
            
            session()->flash("deletemessage","Student has been deleted");
            return redirect("student");

        } 
    }
}
