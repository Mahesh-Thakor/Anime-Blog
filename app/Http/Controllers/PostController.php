<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use View;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(
            [
                'user',
                'comments',
                'comments.user'
            ]
        )->get();
        return View::make('post.post_index')
            ->with("posts", $posts);
    }

    public function create()
    {
        //show form to create a blog post
    }


    public function store(Request $request)
    {
        //store a new post
    }

    public function show(Post $post)
    {
        return View::make('post.post_show')
            ->with("post", $post);
    }


    public function edit(Post $post)
    {
        //show form to edit the post
    }


    public function update(Request $request, Post $post)
    {
        //save the edited post
    }


    public function destroy(Post $post)
    {
        //delete a post
    }
}
