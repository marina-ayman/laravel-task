<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    


<div class="container m-5 p-5 w-50">
<form  action="{{route('posts.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="text">Title</label>
    <input type="text" class="form-control" id="text" name="title">
  </div>
  <div class="form-group">
    <label for="desc">Description</label>
    <textarea type="desc" class="form-control" id="desc" name="desc"></textarea>
  </div>
  <br>
  <div class="form-group">
  <label for="e1"> post creator:</label>
    <select class="form-control" id="e1" name="creator">
      @foreach($users as $user)
    <option value="{{$user->id}}" >{{$user->name}}</option>
   
@endforeach

  </select>
  </div>

  <br>
  <button type="submit" class="btn btn-info" >Submit</button>
</form>

</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>