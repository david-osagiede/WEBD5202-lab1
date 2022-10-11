<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

use App\Repositories\Posts;

use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
        // return $tag;
        // dd($posts);
        // $posts = $posts->all();
        // return session('message');
        $posts = Post::latest();
        // ->filter(request(['month', 'year']))
        // ->get();
//  $posts = (new \App\Repositories\Posts)->all();
        // $posts = Post::latest();
        // // $posts = Post::all();
        // // $posts = Post::latest->get();

        // if ($month = request('month')) {
        //     // $posts->whereMonth('created_at', $month);
        //        $posts->whereMonth('created_at', Carbon::parse($month)->month);
        // }
        // if ($year = request('year')) {
        //     $posts->whereYear('created_at', $year);
        // }

        $posts = $posts->get();

        // $archives = Post::selectRaw(' year(created_at) year, monthname(created_at) month, count(*) published')
        // ->groupBy('year','month')
        // ->orderbyRaw('min(created_at) desc')
        // ->get()
        // ->toArray();

        // return $archive;

        // $archives = Post::archives();

        // return view ('posts.index')->with('posts', $posts);
        return view('posts.index', compact('posts'));
    }
    // public function show(Post $post )
    // {
    //     //  $post = Post::all();
    //     // $post = Post::find($id);
    //     return view ('posts.show', compact('post'));
    // }
      public function show(Post $post)
 {

        //  $post = Post::find($id);
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

        auth()->user()->publish(
            new Post(request(['title', 'body'])));

    //     Post::create([
    //     'title' => request('title'),
    //     'body'  => request('body'),
    //     'user_id' => auth()->id()
    // ]);
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
        session()->flash('message', 'Your post as now been published');
        return redirect('/');

    }
}
