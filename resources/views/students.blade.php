<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel crud</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body class="bg-light">
 
<div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <h2 style="color:red;margin-right:920px"><i class="fa fa-rss" aria-hidden="true"></i> Laravel Blogs</h2>
        </div>
        </div>
      </div class="container">
      <div class="row">
      <div class="col-md-12 text-right mb-3">
     <a href="{{url('home/add')}}" class="btn-lg btn-primary "><i class="fa fa-plus" aria-hidden="true"></i> Add</a>
      </div>
      </div> 
      @if(Session::has('msg'))
      <div class="col-md-12">
      <div class="alert alert-success">{{Session::get('msg')}}</div>
      </div>
      @endif
      @if(Session::has('editmsg'))
      <div class="col-md-12">
      <div class="alert alert-success">{{Session::get('editmsg')}}</div>
      </div>
      @endif
      @if(Session::has('upmsg'))
      <div class="col-md-12">
      <div class="alert alert-success">{{Session::get('upmsg')}}</div>
      </div>
      @endif
      @if(Session::has('delmsg'))
      <div class="col-md-12">
      <div class="alert alert-success">{{Session::get('delmsg')}}</div>
      </div>
      @endif
      <div>
      <div class="row">
      <div class="col-md-12">
      <div class="card">
      <div class="card-header"><h5><strong>Articles / List</strong></h5></div>
      <div class="card-body">
      <table class="table">
      <thead class="thead-black">
      
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>post</th>
      <th>image</th>
      <th width="100">Edit</th>
      <th width="100">Delete</th>
      </tr>
      </thead>
      @if($students)
      @foreach($students as $student)
      <tr>
      <td>{{$student->id}}</td>
      <td>{{$student->name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->post}}</td>
      <td><a href="{{asset('uploads/student/'.$student->image)}}"><img src="{{asset('uploads/student/'.$student->image)}}" width="100px;" height="100px;" alt="image"></a></td>
      <td><a href="{{url('home/edit/'.$student->id)}}" class="btn btn-primary">Edit</a></td>
      <td><a href="#" onclick="deletestudent({{$student->id}});" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
      @else
      <tr>
      <td colspan="6">Articles not added yet.</td>
      </tr>
      @endif
      </table>
      </div>
      </div>
      </div>
      </div>
</body>
</html>
<script type="text/javascript">
function deletestudent(id)

{
  if(confirm('Are u sure want to delete?'))
  {
window.location .href='{{url('home/delete')}}/'+id;
  }
}
</script>