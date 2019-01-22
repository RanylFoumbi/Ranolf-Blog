<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class userCommentController extends Controller
{

     public function index($id)
    {
        $comments = Comment::orderBy($id,'DESC')->take(3)->get();
       
        return $comments;
    }

    
    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'fullname' => 'required|max:255',
            'email' => 'required',
            'message' => 'required',
        ]);

        $comments = new Comment();
            $comments->fullname = $req->fullname;
            $comments->email = $req->email;
            $comments->message = $req->message;
            $comments->user_id = $req->userId;
            $comments->post_id = $req->postId;
        $comments->save();
        
    //return view("comment",["response"=>$comments]);
    return  response()->json($comments);
    }

    // public function show($id)
    // {
    //     $comments = Comment::findOrFail($id);

    //     return view('', compact(''));
    // }

}
