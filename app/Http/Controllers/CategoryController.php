<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    function create(){
        return view('admin.pages.category.create_category');
       }

      public function save(Request $req){
    //   dd($req);
       $req->validate([
        'name'=>'required',
        'discription'=>'required'
    ]);
        ///|size:2048

        $data=new Category;
        $data->name=$req->name;
        $data->discription=$req->discription;

        $data->save();
    // dd($imagename);
        return back()->with('success', 'Data saved successfully!');
       }

       public function view(){
        $data=Category::all();
        return view('admin.pages.category.view_category',compact('data'));
       }

    //deleted
       public function delete($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back();
    }
    //edit
     public function edit($id){
        $data=Category::find($id);
        return view('admin.pages.category.update_category',compact('data'));
    }

    //saveupdate

    public function update(Request $req,$id){
    //     $req->validate([
    //         // 'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg,||dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
    //         'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',

    // ]);
        $data=Category::find($id);
        $data->name=$req->name;
        $data->discription=$req->discription;

        // $imagename=time().'.'.$req->image->extension();
        // $req->image->move(public_path('categoryimage'),$imagename);
        // $data->image=$imagename;


        $data->update();

        return back()->with('success', 'Data updated successfully!');


    }
}
