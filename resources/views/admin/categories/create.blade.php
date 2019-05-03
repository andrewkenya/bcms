@extends('layouts.app')

@section('content')


@include('admin.inc.errors')




<div class="card">
        <div class="card-header">
         Create New Category
        </div>

        <div class="card-body">

            <form action ="{{  route('category.store') }}" method="post">

                {{ csrf_field()}}

             <div class="form-group">

                 <label for="name">Name</label>

                 <input type="text" name="name" class="form-control"  placeholder="Enter Category Name">

             </div>

        

                      <div class="form-group">
                          <div class="text-center">

                              <button class="btn btn-success" type="submit">Save Category</button>
                                      
                          </div>
                           
                          </div>    

            </form>
        </div>
      </div>

    </h2>


@endsection