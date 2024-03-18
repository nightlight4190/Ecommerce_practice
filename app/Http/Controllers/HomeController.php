<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function getAddproduct(){
        return view('admin.product.add');
    }
    public function postAddPrdouct(Request $request){

        $name = $request->name1;
        $detail = $request->detail;
        $status = $request->status;
        $photo = $request->photo;
        
        $category = New Category;
        $category->name = $name;
        $category->detail = $detail;
        $category->status = $status;

        $category->save();
        
    }
}
