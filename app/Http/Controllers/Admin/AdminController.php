<?php
namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class AdminController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('admin');
    }

    public function index(){

        return view('admin.dashboard');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile',compact('user',$user));
    }

    public function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:748',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars',$avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()->with('success','You have successfully upload image.');

    }

}

