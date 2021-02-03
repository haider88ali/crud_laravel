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
          <h2 style="color:red;margin-right:900px">Laravel Crud</h2>
          
        </div>
        </div>

      </div class="container">
      <div class="row">
      <div class="col-md-12 text-right mb-3">
     <a href="{{url('/home')}}" class="btn-lg btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Back</a>
      </div>
      </div> 
      <div>
      <div class="row">
      <div class="col-md-12">
      <div class="card">
      <div class="card-header"><h5><strong>Student / Add</strong></h5></div>
      <div class="jumbotron">
      <div class="card-body">
      <form action="{{url('home/add')}}" method="post" name="store" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
      <label for="">Name</label>
      <input type="text" name="name" id="post" value="{{old('name')}}" class="form-control {{ ($errors->any() && $errors->first('name')) ? 'is-invalid' : '' }}">
      @if($errors->any())
      <p class="invalid-feedback">{{$errors->first('name')}}</p>
      @endif
      </div>
      <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control {{ ($errors->any() && $errors->first('email')) ? 'is-invalid' : ''}}" >
      @if($errors->any())
      <p class="invalid-feedback">{{$errors->first('email')}}</p>
      @endif
      </div>
      
      <div class="form-group">
      <label for="">Post</label>
      <input type="text" name="post" id="post" value="{{old('post')}}" class="form-control {{ ($errors->any() && $errors->first('post')) ? 'is-invalid' : ''}}" >
      @if($errors->any())
      <p class="invalid-feedback">{{$errors->first('post')}}</p>
      @endif
      </div>
      <div class="form-group">
      <label for="">profile</label>
      <input type="file" name="image" id="title" value="{{old('image')}}" class="form-control {{ ($errors->any() && $errors->first('image')) ? 'is-invalid' : '' }}">
      @if($errors->any())
      <p class="invalid-feedback">{{$errors->first('image')}}</p>
      @endif
      </div>
      
      <div class="form-group">
      <button type="submit" name="submit" class="btn btn-primary"> Save Data</button>
      </div>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
</body>
</html>