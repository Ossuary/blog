<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class BlogController extends Controller
{

    /**
     * @return string
     */
    public function getIndex()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('blog.index')->withPosts($posts);
    }

    public function getSingle($slug)
    {
        // fetch from DB based on slug
        $post = Post::where('slug', '=', $slug)->first();

        // return the view and pass in the post object
        return view('blog.single')->withPost($post);
    }
}
