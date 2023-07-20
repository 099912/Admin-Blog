@extends('admin.layout.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Blogs Record</h4>

                    </div>
                    {{-- <div class="pull-right">
                        <a href="#basic-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
                    </div> --}}
                </div>
                <table class="table">
                    <a href="{{route('blog.create')}}"  class="badge badge-success">Add Blog</a><br><br>
                    <thead>
                        <tr>

                            <th scope="col">Id</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Discription</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dat)
                        <tr>
                            <th scope="row">{{$dat->id}}</th>
                            <td>{{$dat->title}}</td>
                            <td>{{$dat->category->name}}</td>
                            <td>{{$dat->discription}}</td>
                            <td><img src="{{ asset('blogimage/' . $dat->image) }}" width="70px"></td>
                            <td><a href="{{route('blog.destroy',$dat->id)}}"  class="badge badge-danger">Delete</a></td>
                            <td><a href="{{route('blog.edit',$dat->id)}}" class="badge badge-success">Update</a></td>
                        </tr>
@endforeach
                    </tbody>
                </table>

            </div>

        </div>
 </div>
</div>
@endsection
