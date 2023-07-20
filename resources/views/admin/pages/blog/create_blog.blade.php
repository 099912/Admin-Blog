@extends('admin.layout.master')
@section('content')



<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Add Blog</h4>
        </div>

    </div>
    <form action="{{route('blog.save')}}" method="POST" enctype="multipart/form-data">
       @csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Title</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="title" placeholder="Title">
                <p style="color:red">@error('title'){{$message}}@enderror</p>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Discription</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" placeholder="Discription Here" type="text" name="discription">
                <p style="color:red">@error('discription'){{$message}}@enderror</p>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Categories</label>
            <div class="col-sm-12 col-md-10">

                <select class="custom-select col-12"  name="categories_id">

                    @foreach($data as $dat)
                        <option  value="{{$dat->id}}">{{$dat->name}}</option>
                @endforeach
                <p style="color:red">@error('categories_id'){{$message}}@enderror</p>

            </select>

            </div>
        </div>
        {{-- <div class="form-group">
            <label>Example file input</label>
            <input type="file"  class="form-control-file form-control height-auto" name="image">
            <p style="color:red">@error('image'){{$message}}@enderror</p>
        </div> --}}


        <div class="form-group">
            <label>Image</label>
            <div class="custom-file">

                <input type="file" name="image" class="custom-file-input" >

                <label class="custom-file-label">Choose file</label>
                <p style="color:red">@error('image'){{$message}}@enderror</p>

            </div>
        </div>

        {{-- <div class="pull-centre"> --}}
            {{-- <label class="col-sm-12 col-md-2 col-form-label">Submit</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" value="bootstrap@example.com" type="submit">
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>


    </form>

               </div>
            </div>
    </div>
 </div>



@endsection
