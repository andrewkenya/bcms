@extends('layouts.app')

@section('content')

<div class="card">

        <div class="card-heading mx-2 my-2">

               Trashed Post
            
                </div>

  <table class="table table-hover">

    <thead>


        <th>

              Image
    </th>


    <th>

            Title
  </th>



  <th>

        Edit 
</th>

<th>

    Delete
</th>


<th>

    Restore
    </th>

    </thead>
  </div>

  <div class="card-body">
    <tbody>
        
        @if($posts->count() > 0)


        @foreach($posts as $post)

        <tr>
            <td><img src="{{$post->featured }}" alt="{{ $post->title }}" width="150px" height="100px"></td>

            <td> {{ $post->title }} </td>
            
            <td>Edit</td>

            
                  <td>
    
                        <a href="{{ route('post.kill', ['id' => $post->id ]) }}" class="btn btn-xs btn-danger">
                            <i class="fas fa-trash"></i></a>
                      </td>


                       <td>
                      
                      <a href="{{ route('post.restore', ['id' => $post->id ]) }}" class="btn btn-xs btn-success">
                            <i class="fas fa-trash-restore"></i></a>
                      </td>
    

          
        </tr>

        @endforeach
        
        @else

           <tr>
               <th colspan="5" class="text-center"> No Trashed posts</th>
           </tr>

        @endif
        
    </tbody>

  </table>
</div>

@endsection