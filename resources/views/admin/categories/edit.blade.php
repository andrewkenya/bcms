@extends('layouts.app')

@section('content')

@include('admin.inc.errors')




<div class="card">
        <div class="card-header">
         Update  Post
        </div>

        <div class="card-body">

            <form action ="{{  route('category.update', ['id' => $category->id]) }}" method="post">

                {{ csrf_field()}}

             <div class="form-group">

                 <label for="name">Name</label>

                 <input type="text" name="name"  value="{{ $category->name }}" class="form-control"  placeholder="Enter Category Name">

             </div>

        

                      <div class="form-group">
                          <div class="text-center">

                              <button class="btn btn-success" type="submit">Update Category</button>
                                      
                          </div>
                           
                          </div>    

            </form>
        </div>
      </div>

    </h2>


@endsection