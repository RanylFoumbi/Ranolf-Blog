<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Cathegory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $postList = Post::get();
        return view('admin.post.index', compact('postList'));
    }

    public function create(){

        $cathegories = Cathegory::get();
        return view('admin.post.create', compact('cathegories'));
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validatedData = $req->validate([
            'title' => 'required|max:255',
            'subtitle' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);

        $image = $req->file('image');
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length = 15;

        if(isset($image)){
            $imageName = substr(str_shuffle(str_repeat($pool, 5)), 0, $length).'.'.uniqid().'.'.
            $image->getClientOriginalExtension();

            if(!file_exists('upload/post')){
                mkdir('upload/post', 0777, true);
            }
            $image->move("upload/post", $imageName);    
        }
        else{
            $imageName = "default.png";
        }

        $PostList = new Post();
            $PostList->title = $req->title;
            $PostList->subtitle = $req->subtitle;
            $PostList->image = $imageName;
            $PostList->description = $req->description;
            $PostList->user_id = auth()->id();
            $PostList->cathegory_id = $req->cathegory;
        $PostList->save();

        return redirect()->action('Admin\PostController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $PostList = Post::find($id);

        return view('admin.post.show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $cathegories = Cathegory::get();
        return view('admin.post.edit', compact('post', 'cathegories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $PostList =  Post::find($id);

        $image = $req->file('image');
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $length = 15;

        if(isset($image)){
            $imageName = substr(str_shuffle(str_repeat($pool, 5)), 0, $length).'.'.uniqid().'.'.
            $image->getClientOriginalExtension();

            if(!file_exists('upload/post')){
                mkdir('upload/post', 0777, true);
            }
            $image->move("upload/post", $imageName);    
        }
        else{
            $imageName = "default.png";
        }

            $PostList->title = $req->title;
            $PostList->subtitle = $req->subtitle;
            $PostList->image = $imageName;
            $PostList->description = $req->description;
            $PostList->user_id = auth()->id();
            $PostList->cathegory_id = $req->cathegory;
        $PostList->save();

        return redirect()->action('Admin\PostController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("fuygdhzskqjk");
        $post = Post::find($id);
        $post->delete();
        return redirect()->action('Admin\PostController@index');
    }
}
