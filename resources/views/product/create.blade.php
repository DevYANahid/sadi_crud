<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Books List</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark  ">
  <div class="container-fluid">
    <a class="navbar-brand container text-white" href="/">Books List</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
@if($message = Session::get('success'))
<div class="container mt-5">
    <div class="d-flex flex-row-reverse">
        <div class="alert alert-success alert-dismissible">
            <strong class="">{{$message}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        </div>
    </div>
</div>
    
@endif
<form method="POST" class="container mt-5" action="/product/store" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Book Name</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="bookname" placeholder="Book Name" value="{{old('bookname')}} " >
      @if ($errors ->has('bookname'))
      <span class="text-danger">{{$errors->first('bookname')}}</span>
      @endif
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Book Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="bookdesc" rows="3">{{old('bookdesc')}}</textarea>
      @if ($errors ->has('bookdesc'))
      <span class="text-danger">{{$errors->first('bookdesc')}}</span>
      @endif
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Book Image</label>
        <input type="file" class="form-control" name="bookimg" value="{{old('bookimg')}}" id="exampleFormControlInput1">
        @if ($errors ->has('bookimg'))
        <span class="text-danger">{{$errors->first('bookimg')}}</span>
        @endif
    </div>

    <button class="btn btn-primary" type="submit">Submit</button>
  </form>

</body>
</html>