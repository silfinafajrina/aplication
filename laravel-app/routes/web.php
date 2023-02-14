<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "name" => "Silfina Fajrina",
        "email" => "silfinafajrina@uii.ac.id",
        "image" => "image1.jpg"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Silfina Fajrina',
        'email' => 'silfinafajrina@uii.ac.id',
        'image' => 'image1.jpg'
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul Post Pertama",
            "slug" =>"judul-post-pertama",
            "author" =>"Silfina Fajrina",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo eius mollitia repudiandae quod modi error recusandae alias tenetur itaque et eum tempore cum praesentium nostrum repellat, laborum vero, quis nesciunt doloremque vel ex nisi provident, totam temporibus? Ducimus dolor voluptatibus eaque veritatis, molestias ab deleniti unde, adipisci, tempore totam ut quisquam ipsa accusamus odit impedit incidunt rem temporibus? Possimus fugit reprehenderit pariatur, non, magnam praesentium tempora quaerat quo incidunt labore dolorum? Fugiat inventore odit quibusdam dignissimos nobis ratione eaque quasi."
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" =>"Caca",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo eius mollitia repudiandae quod modi error recusandae alias tenetur itaque et eum tempore cum praesentium nostrum repellat, laborum vero, quis nesciunt doloremque vel ex nisi provident, totam temporibus? Ducimus dolor voluptatibus eaque veritatis, molestias ab deleniti unde, adipisci, tempore totam ut quisquam ipsa accusamus odit impedit incidunt rem temporibus? Possimus fugit reprehenderit pariatur, non, magnam praesentium tempora quaerat quo incidunt labore dolorum? Fugiat inventore odit quibusdam dignissimos nobis ratione eaque quasi.Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolores accusantium voluptate accusamus quos ullam iusto assumenda ab rerum? Id."
        ]];
});
Route::get('/posts',[PostController::class, 'index'] );
Route::get('/posts/{post:slug}', [PostController::class, 'show']);