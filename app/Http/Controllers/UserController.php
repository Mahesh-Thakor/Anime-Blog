<?php

namespace App\Http\Controllers;

use App\Models\User;
use View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(
            [
                'posts',
            ]
        )->get();
        return View::make('user.user_index')
            ->with("users", $users);
    }

    public function create()
    {
        //show form to create a blog post
    }


    public function store(Request $request)
    {
        //store a new post
    }

    public function show(User $user)
    {        
        $user->loadMissing('posts');
        $posts = $user->posts;
        return View::make('user.user_show')
            ->with("user", $user)
            ->with("user_posts", $posts);
    }


    public function edit(User $user)
    {
        //show form to edit the post
    }


    public function update(Request $request, User $user)
    {
        //save the edited post
    }


    public function destroy(User $user)
    {
        //delete a post
    }
}
