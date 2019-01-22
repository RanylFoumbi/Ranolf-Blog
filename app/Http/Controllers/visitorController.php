<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;  

class visitorController extends Controller
{
    /**   
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->middleware('admin');
    }
    
    public function create(){

        return view('admin.visitorform');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitorList = Visitor::all();
        return view('admin.visitor', compact('visitorList',$visitorList));
    }

    public function store(Request $req){
         
       $visitorList = Visitor::create([
        'name' => $req->input('name'),
        'email' => $req->input('email'),
        'message' => $req->input('message'),
       ]);

        return redirect()->route('visitor'); 
    }

    public function editData( $visitorId ){
        $visitorList = Visitor::find( $visitorId );
        
        if(count([$visitorList]) > 0){
            return view('admin.editVisitor',compact('visitorList',$visitorList));
        }else {
            $visitorList = Visitor::all();

            return view('admin.visitor', compact('visitorList',$visitorList));
        }
    }

    public function updateData(Request $req, $visitorId)
    {
       //dd($req->input());
       $visitorList =  Visitor::find($visitorId);
      
       $visitorList->name = $req->input('name');
       $visitorList->email = $req->input('email');
       $visitorList->message = $req->input('message');
       $visitorList->updated_at = $req->input('updated_at');

       $visitorList->save();
       return redirect()->route('visitor'); 
    }

    public function destroy($visitorId)
    {
       Visitor::destroy($visitorId);
        return redirect()->route('visitor'); 
    }

}
