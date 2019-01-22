<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function index()
    {
        // $post_id = Post::get();
        // return view('user-post-id', compact('post_id'));
    }

    public function show($id)
    {
        $post_id = Post::where('id', $id)->get();
        return view('user-post-id', compact('post_id'));
    }

}
