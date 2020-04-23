@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-end">
        <a href="{{route('category.create')}}" class="btn btn-success col-3 mb-1">Add Category </a>
       
    </div>
    
    <div class="card card-default ">
       
    <div class="card-header">Categories</div>
        
        <div class="card-body">
            @if ($categories->count()>=1)
            <table class="table table-stripped">
                
                <th>Name</th>
                <th>Post count</th>
                <th>Operations</th>
                
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name}} </td>
                    <td>{{$category->post->count() }}</td>
                   <td> <a href="{{route('category.edit', $category->id)}}" class="btn btn-info">Edit</a> 
                    <a href="{{route('category.destroy', $category->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" >Delete</a>
                </td>
                </tr>
                
                @endforeach
            </table>
            @else
            <h2 class="text-center"> No  Categories Found! </h2>
            @endif

                    
                <form action="{{route('category.destroy', $category )}}" method="POST">
                @csrf 
                @method('delete')
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            
                        are sure u want to delete 
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">delete</button>
                        {{-- <a href="{{route('category.destroy', $category)}}" class="btn btn-danger">Delete</a> --}}
                        <!--  <button type="button" class="btn btn-primary">Delete</button> -->
                        </div>
                    </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    
      
     
   
    


</div> 


    
@endsection