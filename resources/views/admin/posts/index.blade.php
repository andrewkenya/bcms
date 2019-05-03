@extends('layouts.app')

@section('content')

<div class="card">

        <div class="card-heading mx-2 my-2">

                Published Posts
            
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

        Trash
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
            
            <td>
                    <a href="{{ route('post.edit', ['id' => $post->id ]) }}" class="btn btn-xs btn-info">
                            <i class="fas fa-edit"></i></a>
            </td>

            <td>
    
                    <a href="{{ route('post.delete', ['id' => $post->id ]) }}" class="btn btn-xs btn-danger">
                        <i class="fas fa-trash"></i></a>
                  </td>

          
        </tr>

        @endforeach

        @else

        <tr>
                <th colspan="5" class="text-center"> No Published posts</th>
            </tr>
        
        @endif
        
    </tbody>

  </table>
</div>

@endsection