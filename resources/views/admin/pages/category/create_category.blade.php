@extends('admin.layout.master')
@section('content')



<div class="main-container">
<div class="pd-ltr-20 xs-pd-20-10">
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Add category</h4>

        </div>

    </div>
    <form action="{{route('category.save')}}" method="POST">
       @csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Name</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="name" placeholder="Sports">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Discription</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" placeholder="Discription Here" type="text" name="discription">
            </div>
        </div>

            <button type="submit" class="btn btn-primary">Submit</button>

    </form>

               </div>
            </div>
    </div>
 </div>



@endsection
