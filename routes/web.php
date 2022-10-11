<?php
use Illuminate\Support\Facades\Route;


// View => view()
// Request => request()

// App::bind('App\Billing\Stripe', function () {
//     return new \App\Billing\Stripe(config('services.stripe.secret'));
// });
// App::singleton('App\Billing\Stripe', function () {
//     return new \App\Billing\Stripe(config('services.stripe.secret'));
// });
// $stripe = App::make('App\Billing\Stripe');

// $stripe = resolve('App\Billing\Stripe');
// // $stripe = instance('App\Billing\Stripe');

// dd($stripe);

// dd(resolve('App\Billing\Stripe'));

Route::get('/', 'App\http\Controllers\PostsController@index')->name('home');

Route::get('/david', 'App\http\Controllers\PostsController@index');

// Route::get('/posts/{post}', 'App\http\Controllers\PostsController@show');
Route::get('/posts/create', 'App\http\Controllers\PostsController@create');


Route::post('/posts', 'App\http\Controllers\PostsController@store');

Route::get('/posts/{post}', 'App\http\Controllers\PostsController@show');

Route::get('/posts/tag/{tag}', 'TagsController@index');


Route::post('/posts/{post}/comments', 'App\http\Controllers\CommentsController@store');

Route::get('/register', 'App\http\Controllers\RegistrationController@create');

Route::post('/register', 'App\http\Controllers\RegistrationController@store');

Route::get('/login', 'App\http\Controllers\SessionsController@create');

Route::post('/login', 'App\http\Controllers\SessionsController@store');

Route::get('/logout', 'App\http\Controllers\SessionsController@destroy');
// use App\Models\task;
// use App\http\Controllers\TasksController;
// Route::get('/tasks', 'App\http\Controllers\TasksController@index');
// Route::get('/tasks/{task}', 'App\http\Controllers\TasksController@show');




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 /* Route::get('/', function () {
    return view('welcome');
}); */

// Route::get('/', function () {
//     $tasks = DB::table('tasks')->latest()->get();
//     // return $tasks;
//     // $tasks = [
//     //     'Go to the store',
//     //     'Finish the screencast',
//     //     'Clean the house'
//     // ];
//     return view('welcome', compact('tasks'));
// });
// Route::get('/tasks', function () {
//     $tasks = Task::all();
//     return view('tasks.index', compact('tasks'));
// });
// Route::get('/tasks', function () {
//     $tasks = DB::table('tasks')->latest()->get();

//     return view('tasks.index', compact('tasks'));
// });

    // dd($id);
    // $tasks = DB::table('tasks')->latest()->get();
    // $task = DB::table('tasks')->find($id);

    // $task->incompleted();
    // dd($task);
    // return view('welcome', compact('tasks'));

/* Route::get('/', function () {
    $name = 'david';
    $age = 20;

    return view('welcome', compact('name', 'age'));
}); */

/*Route::get('/', function () {
    $name = 'David';
    return view('welcome', ['name' => $name]);
}); */

/* Route::get('/', function () {
    return view('welcome')->with('name', 'world');
}); */

/* Route::get('/', function () {
return view('welcome' , [ 'name' => 'World'
    ]);
}); */


 /* Route::get('about', function () {

    return view('about')

}); */

/* Route::get('/about', 'PagesController@about'); */

