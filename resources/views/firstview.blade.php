

<?php

	/*$user = ["sanjay","amit","rahul"];
	foreach ($user as $users) {
		echo $users."<br/>";
	}

	foreach ($newuser as $newusers) {
		echo $newusers."<br/>";
	}*/
	/*@foreach($data as $value)
	{{$value->name}} 
    {{$value->email}}</br>
	@endforeach

*/


?>





@foreach($data as $value)
	{{$value->get('name')}} 
    {{$value->get('email')}}</br>
@endforeach