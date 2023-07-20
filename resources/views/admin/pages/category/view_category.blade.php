@extends('admin.layout.master')
@section('content')
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Category</h4>

                    </div>
                    {{-- <div class="pull-right">
                        <a href="#basic-table" class="btn btn-primary btn-sm scroll-click" rel="content-y"  data-toggle="collapse" role="button"><i class="fa fa-code"></i> Source Code</a>
                    </div> --}}
                </div>
                <table class="table">
                    <a href="{{route('category.create')}}"  class="badge badge-success">Add Category</a><br><br>
                    <thead>
                        <tr>

                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Discription</th>
                            <th scope="col">Action 1</th>
                            <th scope="col">Action 2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $dat)
                        <tr>
                            <th scope="row">{{$dat->id}}</th>
                            <td>{{$dat->name}}</td>
                            <td>{{$dat->discription}}</td>
                            <td><a href="{{route('category.destroy',$dat->id)}}"  class="badge badge-danger">Delete</a></td>
                            <td><a href="{{route('category.edit',$dat->id)}}" class="badge badge-success">Update</a></td>
                        </tr>
@endforeach
                    </tbody>
                </table>

            </div>

        </div>
 </div>
</div>
@endsection
