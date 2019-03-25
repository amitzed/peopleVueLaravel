<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
use App\Post;

class PostController extends Controller
{
    public function store(Request $request)
    {
      $post = new Post([
        'first_name' => $request->get('first_name'),
        'last_name' => $request->get('last_name'),
        'age' => $request->get('age'),
        'email' => $request->get('email'),
        'secret' => $request->get('secret')
      ]);

      $post->save();

      return response()->json('Added!');
    }

    public function index()
    {
      return new PostCollection(Post::all());
    }

    public function edit($id)
    {
      $post = Post::find($id);
      return response()->json($post);
    }

    public function update(Request $request, $id)
    {
      $post = Post::find($id);

      $post->update($request->all());

      return response()->json('Updated!');
    }

    public function delete($id)
    {
      $post = Post::find($id);

      $post->delete();

      return response()->json('Deleted!');
    }
}
