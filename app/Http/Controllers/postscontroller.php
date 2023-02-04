<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Models\post;
use Illuminate\Http\Request;

class postscontroller extends Controller
{
    public function index(){


      $postdelete=post::withTrashed()->paginate((2));

       $posts=post::all();
       $users=User::all();
// dd($posts);
       return view('posts.index',[ "posts" => $posts],["users"=> $users]);
    }


    public function show($postid){

        $post=post::where("id",$postid)->get();

        return view('posts.show',[ "posts" => $post]);
     }

    public function create() {

      $users=User::all();

      return view('posts.create',
      ["users"=> $users]
    );
    }

public function store(Request $request) {

$data = $request -> all();
$title = $data['title'];
$description = $data['desc'];
// $postcreator = $data['creator'];
      
post::create([
  'title' => $title ,
  'desc'  => $description,
  // 'user_id'=> $postcreator
]);
return redirect(route('posts'));
    }


    public function destroy($Id){

      post::find($Id)->delete();
      return redirect('/posts');

  }

  public function edit($Id){
    $post= post::find($Id);
    // dd($Id);
    $Users=User::find($post["user_id"]);

    return view("posts.edit", ['post' => $post],['Users' => $Users]);

}

public function update($Id , Request $request){

    $post= post::find($Id);
    $data = $request->all();
        // dd($data);
        $title = $data['title'];
        $description = $data['desc'];
        // $postCreator = $data['creator'];
    $post->update([
        'title'=>$title,
        'desc'=>$description,
        // 'user_Id'=>$postCreator


    ]);
    return redirect(route('/posts'));
    // return view('posts');

}



public function restore($postid){
  $postdelete=post::withTrashed()->find($postid)->restore();

  return back();


}

public function logout()
{
 return back();
}

public function login()
{
  redirect(route("/posts"));
}
}