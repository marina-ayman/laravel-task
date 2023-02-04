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
 

<table class="table table-hover table-dark m-5 w-75  container"  >

 
  <thead>

  <a href="{{route('posts.create')}}"   class="btn btn-info " >create</a>

    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Desc</th>
      <th scope="col">posted by</th>
      <th scope="col"> created_at</th>
      <th scope="col"> updated_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)

    <tr>

      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->desc}}</td>
      <td>{{ $post->user ? $post->user->name : "Not Found"}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at}}</td>
    
      <td>
    
   
        <a href="{{route('posts.show',[$post->id])}}"  class="btn btn-success"> view</a>
  
       <!-- <a href="{{route('destroy',$post['id'])}}" class="btn btn-danger">DELETE</a>  
    -->
        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-info">EDIT</a>



        <form action="{{route('destroy',$post['id'])}}" method="POST">
                        @csrf
                        @method('delete',$post['id'])
                            <button type="submit" href="" class="btn btn-danger" data-confirm="Are you sure to delete this item?" >Delete</button>
                           if(!is_null($post['delete_at']))
                            <form action="{{route('posts.restore',post['id'])}}" action="get" >
                             @csrf
<button type="submit">restore</button>
                          </form>
         </form>
      </td>
    </tr>

    @endforeach
  
 
  </tbody>
</table>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>