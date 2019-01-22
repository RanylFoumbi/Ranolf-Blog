<?php
namespace App\Http\Controllers\Admin;

use App\Cathegory;
use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CathegoryController extends Controller
{
       
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function create(){

        return view('admin.cathegory.createCathegory');
    }

    public function index()
    {
        $cathegoryList = Cathegory::get();

        return view('admin.cathegory.cathegoryList', compact('cathegoryList'));
        //return view('cathegory', compact('cathegoryList'));
    }


    public function store(Request $req){

           $message = [ 'name'=>'a cathegory name is required!',
                        'detail'=>'a cathegory detail is required!',
                        'image'=>'a cathegory image is required!' ];

                $validatedData = $req->validate([
                    'name' => 'required|max:255',
                    'detail' => 'required',
                    'image' => 'required|mimes:jpeg,jpg,bmp,png,gif',

                ],  $message);
                

                if ($validatedData->fails()) {

                    return redirect('/admin/cathegory/createCathegory')
                        ->withErrors($validatedData)
                        ->withInput();
                }

                $image = $req->file('image');
                $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $length = 15;
dd($pool);
                if(isset($image)){
                    $imageName = substr(str_shuffle(str_repeat($pool, 5)), 0, $length).'.'.uniqid().'.'.
                    $image->getClientOriginalExtension();

                    if(!file_exists('upload/cathegory')){
                        mkdir('upload/cathegory', 0777, true);
                    }
                    $image->move("upload/cathegory", $imageName);    
                }
                else{
                    $imageName = "default.png";
                }

                $cathegoryList = new Cathegory();
                    $cathegoryList->name = $req->name;
                    $cathegoryList->image = $imageName;
                    $cathegoryList->detail = $req->detail;
                    $cathegoryList->user_id = auth()->id();
                $cathegoryList->save();

         return redirect()->action('Admin\CathegoryController@index')->with('message', 'cathegory has been created successfully!');
     }


     public function editData( $cathegoryId )
     {
        $cathegoryList = Cathegory::find($cathegoryId);
        
        if(count([$cathegoryList]) > 0){
            return view('admin.cathegory.editCathegory',compact('cathegoryList'));
        }else {
            $cathegoryList = Cathegory::all();

            return view('admin.cathegory.editCathegory', compact('cathegoryList'));
        }
     }


     public function updateData(Request $req, $cathegoryId)
     {

       $cathegoryList =  Cathegory::find($cathegoryId);
       
       $image = $req->file('image');
       $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
       $length = 15;

       if(isset($image)){
           $imageName = substr(str_shuffle(str_repeat($pool, 5)), 0, $length).'.'.uniqid().'.'.
           $image->getClientOriginalExtension();

           if(!file_exists('upload/cathegory')){
               mkdir('upload/cathegory', 0777, true);
           }
           $image->move("upload/cathegory", $imageName);    
       }
       else{
           $imageName = "default.png";
       }

       $cathegoryList->name = $req->name;
       $cathegoryList->image =  $imageName;
       $cathegoryList->detail = $req->detail;
       $cathegoryList->user_id = auth()->id();
       $cathegoryList->updated_at = Carbon::now()->toDateString();

       $cathegoryList->save();

       return redirect()->route('Admin-cathegoryList'); 
    }

    public function destroy($cathegoryId)
    {
         Cathegory::destroy($cathegoryId);
         return redirect()->route('Admin-cathegoryList'); 
    }

}
