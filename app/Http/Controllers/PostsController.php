<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {

        $posts = Post::all();
        // $posts = Post::latest->get();

        return view ('posts.index', compact('posts'));
    }
    // public function show(Post $post )
    // {
    //     //  $post = Post::all();
    //     // $post = Post::find($id);
    //     return view ('posts.show', compact('post'));
    // }
      public function show($id)
 {

         $post = Post::find($id);
        return view ('posts.show', compact('post'));
    }
    public function create()
    {
        return view ('posts.create');
    }
    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'

        ]);
        Post::create(request(['title', 'body']));
        // dd(request()->all());
        // dd(request('title'));
        // dd(request(['title', 'body']));

        //create new post using request data
        // $post = new Post;

        // $post->title = request('title');
        // $post->body = request('body');
        // // save it to the database
        // $post->save();

        // Post::create([
        //     'title'=> request('title'),
        //     'body' => request('body')
        // ]);
        //redirect to homepage

        return redirect('/');

    }
}
