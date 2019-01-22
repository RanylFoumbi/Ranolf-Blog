<?php
namespace App\Http\Controllers;

use App\Cathegory;

use Illuminate\Http\Request;

    class CathegoryController extends Controller
{
       
    public function index()
    {
        $cathegoryList = Cathegory::get();
        //dd($cathegoryList);
        return view('cathegory', compact('cathegoryList'));
    }


}

 