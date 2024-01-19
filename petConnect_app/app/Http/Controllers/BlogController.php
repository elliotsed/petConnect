<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function blogPage()
    {
        $posts = Post::paginate(2);
        return view("blog", compact("posts"));
    }
}
