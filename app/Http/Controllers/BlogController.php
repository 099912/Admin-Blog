<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    function create(){
        $data=Category::all();
        return view('admin.pages.blog.create_blog',compact('data'));
       }

      public function save(Request $req){
    //   dd($req);
       $req->validate([
        'title'=>'required',
        'categories_id'=>'required',
        'discription'=>'required',
        'image'=>'required|image'
///|image|mimes:jpeg,png,jpg,gif,svg
    ]);
    //   dd($req);
        ///|size:2048

        $data=new Blog;
        $data->title=$req->title;
        $data->categories_id=$req->categories_id;
        $data->discription=$req->discription;

        $imagename=time().'.'.$req->image->extension();
        $req->image->move(public_path('blogimage'),$imagename);
        $data->image=$imagename;

        $data->save();

        return back()->with('success', 'Data saved successfully!');
       }

       public function view(){
        $data=Blog::all();
        return view('admin.pages.blog.view_blog',compact('data'));
       }

    //deleted
       public function delete($id){
        $data=Blog::find($id);
        $data->delete();
        return redirect()->back();
    }
    //edit
     public function edit($id){
        $data=Blog::find($id);
        $dat=Category::all();
        return view('admin.pages.blog.update_blog',compact('data','dat'));
    }

    //saveupdate

    public function update(Request $req,$id){
        $req->validate([
            // 'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg,||dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',

    ]);
        $data=Blog::find($id);
        $data->title=$req->title;
        $data->categories_id=$req->categories_id;
        $data->discription=$req->discription;

        $imagename=time().'.'.$req->image->extension();
        $req->image->move(public_path('blogimage'),$imagename);
        $data->image=$imagename;


        $data->update();

        return back()->with('success', 'Data updated successfully!');


    }


    public function viewDetails(){
        $data=Blog::all();
        return view('admin.pages.blog.blog_details',compact('data'));
    }

    public function viewContent(){
        $data=Blog::all();
        return view('admin.pages.blog.content_page',compact('data'));
    }
}
