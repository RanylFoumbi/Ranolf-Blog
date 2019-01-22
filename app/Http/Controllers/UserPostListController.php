<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class UserPostListController extends Controller
{
    
    // public function index()
    // {
    //     // $postList = Post::get();
    //     // return view('user-posts', compact('postList'));
    // }

    public function show($cathegoryId)
    {
        $postList = Post::where('cathegory_id', $cathegoryId)->get();
        return view('user-posts', compact('postList'));
    }

    // public function create(){

    
    // }


     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function store(Request $req)
    // {
    
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
   

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $req, $id)
    // {
   
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    
    // }
}
