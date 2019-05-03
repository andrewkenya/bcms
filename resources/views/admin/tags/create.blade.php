@extends('layouts.app')

@section('content')


@include('admin.inc.errors')




<div class="card">
        <div class="card-header">
         Create Tag
        </div>

        <div class="card-body">

            <form action ="{{ route('tag.store') }}" method="post">

                {{ csrf_field()}}

             <div class="form-group">

                 <label for="name">Tag</label>

                 <input type="text" name="tag" class="form-control"  placeholder="Enter Tag Name">

             </div>

        

                      <div class="form-group">
                          <div class="text-center">

                              <button class="btn btn-success" type="submit">Save Tag </button>
                                      
                          </div>
                           
                          </div>    

            </form>
        </div>
      </div>

    </h2>


@endsection