
@extends("student.create")


@section("studentid",$student1->id)

@section("studentname",$student1->name)

@section("studentemail",$student1->email)

@section("editmethod")
    {{ method_field('PUT')}}
@endsection
