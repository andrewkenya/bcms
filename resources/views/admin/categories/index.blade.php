@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-heading mx-2 my-2">

    Categories

    </div>

  <table class="table table-hover">

    <thead>


        <th>

              Category name
    </th>


    <th>

            Editing name
  </th>



  <th>

        Deleting name
</th>


    </thead>
  </div>

  <div class="card-body">

    <tbody>

         @if($categories->count() > 0)
         
        @foreach($categories as $category)

        <tr>
          <td>

            {{ $category->name }}

          </td>


          <td>
    
            <a href="{{ route('category.edit', ['id' => $category->id ]) }}" class="btn btn-xs btn-info">
               <i class="fas fa-edit"></i></a>
          </td>




          <td>
    
              <a href="{{ route('category.delete', ['id' => $category->id ]) }}" class="btn btn-xs btn-danger">
                  <i class="fas fa-trash"></i></a>
            </td>
        </tr>
    @endforeach
    
     @else 

         <tr>
              <th colspan="5" class="text-center"> No  Categories Yet</th>
         </tr>

      @endif
        
    </tbody>

  </table>
</div>

@endsection