@extends('layouts.app')

@section('content')


@if(count($errors) > 0)

     <ul class="list-group">
       
        @foreach($errors->all() as $error)
            
              <li class="list-group-item text-danger">
                    {{ $error }}
              </li>

       @endforeach

    </ul>
     @endif




<div class="card">
        <div class="card-header">

        Edit user Profile

        </div>

        <div class="card-body">

            <form action ="{{  route('user.profile.update') }}" method="post" enctype="multipart/form-data">

                {{ csrf_field()}}

             <div class="form-group">

                 <label for="name">Username</label>

                 <input type="text" name="name" value ="{{  $user->name }}" class="form-control">

             </div>

             <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email"  name="email"  value ="{{ $user->email }}" class="form-control">
                  </div>


                  <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password"  name="password" class="form-control">
                      </div>


                    <div class="form-group">
                            <label for="name">Avatar Upload</label>
                            <input type="file"  name="avatar" class="form-control">
                          </div>

                    <div class="form-group">
                                <label for="name">Facebook Profile</label>
                                <input type="text"  name="facebook" value ="{{ $user->profile->facebook }}" class="form-control">
                              </div>

                    <div class="form-group">
                                    <label for="name">Youtube Profile</label>
                                    <input type="text"  name="youtube"  value ="{{ $user->profile->youtube }}"  class="form-control">
                                  </div>

                        <div class="form-group">
                                        <label for="name">About you</label>
                                      <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                                      </div>
                   

                      <div class="form-group">
                          <div class="text-center">

                              <button class="btn btn-primary" type="submit">
                              <i class="fas fa-user-plus"></i>  Update Profile
                            </button>
                                      
                          </div>
                           
                          </div>    

            </form>
        </div>
      </div>

    </h2>


@endsection