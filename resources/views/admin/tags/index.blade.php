@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-heading mx-2 my-2">

  Tags

    </div>

  <table class="table table-hover">

    <thead>


        <th>

              Tag name
    </th>


    <th>

            Editing Tag
  </th>



  <th>

        Deleting Tag
</th>


    </thead>
  </div>

  <div class="card-body">

    <tbody>

         @if($tags->count() > 0)
         
        @foreach($tags as $tag)

        <tr>
          <td>

            {{ $tag->tag }}

          </td>


          <td>
    
            <a href="{{ route('tag.edit', ['id' => $tag->id ]) }}" class="btn btn-xs btn-info">
               <i class="fas fa-edit"></i></a>
          </td>




          <td>
    
              <a href="{{ route('tag.delete', ['id' => $tag->id ]) }}" class="btn btn-xs btn-danger">
                  <i class="fas fa-trash"></i></a>
            </td>
        </tr>
    @endforeach
    
     @else 

         <tr>
              <th colspan="5" class="text-center"> No  Tags Yet</th>
         </tr>

      @endif
        
    </tbody>

  </table>
</div>

@endsection