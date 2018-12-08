 @extends("student.layout.master")

@section("title","student application | listing")

@section("body")
<dIV class="container ">
  <div class="row">
   <div class="container owtcontainer">
    <div class="card">
      <div class="card-header"><h1>Student List</h1>
       <a href="{{url('student/create')}}" class="btn btn-success"style="float:right">Add Student</a>
      </div>
    </div>
  </div>
</div>

  <table class="table">
    <thead>
      <tr class="table-success">
        <th>Sr No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1 ?>
      @foreach($students as $student)
        <tr class="table-active">
          <td>{{$i++}}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->email}}</td>
          <td>
                     <img src="{{ url('upload/'.$student->image) }}" alt="No image" style="height:50px;width:50px" />
          
          </td>
          <td>
              <div class="icon-bar"><a href="{{url('student/'.$student->id.'/edit')}}"><i class="fa fa-edit"></i></a> </div>
              <form action="/student/{{ $student->id }}"method="post" class="form">
                  {{ csrf_field() }}
                  {{ method_field("delete") }}
                  <button style="margin-left:50;padding: 0;margin-top: -2;"><div style="margin-left:1;" class="delete"><div class="icon-bar"><i class="fa fa-trash"></i> </div></div></button>
              </form>  
              
          </td>
        </tr>  
     @endforeach
    </tbody>
  </table>
  </div>
</div>
</div>

@endsection