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
       <h1>
    <a href="{{route('posts')}}">
      posts
</a>
    </h1>
@foreach($posts as $post)

<div class="card" style="width: 18rem;">


  <div class="card-header">
    post info
  </div>

  <ul class="list-group list-group-flush">
    <li class="list-group-item">id    : {{$post["id"]}} </li>
    <li class="list-group-item">Title : {{$post["title"]}} </li>
    <li class="list-group-item">Desc  : {{$post["desc"]}}</li>
    <li class="list-group-item">posted_by  : {{$post["posted_by"]}}</li>
  </ul>
</div>

@endforeach



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>