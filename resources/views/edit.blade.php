<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
 <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>
<div class="container">
<div class="col-md-6 offset-3">
<form action="{{url('home/edit/'.$students->id)}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="imgcontainer">
    <img src="{{asset('uploads/student/'.$students->image)}}"  width="80px;" height="100px;" class="avatar">
  </div>

  <div class="container">
  <label for="name"><b>Name</b></label>
  <input type="text" name="name" id="name" value="{{old('name',$students->name)}}" class="form-control {{ ($errors->any() && $errors->first('name')) ? 'is-invalid' : '' }}">
  @if($errors->any())
  <p class="invalid-feedback">{{$errors->first('name')}}</p>
      @endif
     <label for="email"><b>Email</b></label>
  <input type="email" name="email" id="email" value="{{old('email',$students->email)}}" class="form-control {{ ($errors->any() && $errors->first('email')) ? 'is-invalid' : '' }}">
  @if($errors->any())
  <p class="invalid-feedback">{{$errors->first('email')}}</p>
      @endif

      <label for="post"><b>Post</b></label>
  <input type="text" name="post" id="post" value="{{old('post',$students->post)}}" class="form-control {{ ($errors->any() && $errors->first('post')) ? 'is-invalid' : '' }}">
  @if($errors->any())
  <p class="invalid-feedback">{{$errors->first('post')}}</p>
      @endif
      <label for="image"><b>Profile</b></label>
  <input type="file" name="image" id="image"  class="form-control {{ ($errors->any() && $errors->first('image')) ? 'is-invalid' : '' }}">
  @if($errors->any())
  <p class="invalid-feedback">{{$errors->first('image')}}</p>
      @endif

        
    <button type="submit">Login</button>
   
  
</form>
</div>
  </div>
</body>
</html>
