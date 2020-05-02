@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-end">
        <a href="{{route('tag.create')}}" class="btn btn-success col-3 mb-1">Add tag </a>
        
    </div>
    
    <div class="card card-default ">
        
        <div class="card-header">Tags</div>
        
        <div class="card-body">
            @if ($tags->count()>=1)
            <table class="table table-stripped">
                
                <th>Name</th>
                
                <th>Count</th>

                @foreach ($tags as $tag)
                <tr>
                    <td>{{ $tag->name}} </td>
                    <td>{{$tag->posts->count() }}</td>
                    <td> <a href="{{route('tag.edit', $tag->id)}}" class="btn btn-info">Edit</a> 
                        <a href="{{route('tag.destroy', $tag->id)}}" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" >Delete</a>
                    </td>
                </tr>
                
                @endforeach
            </table>
            @else
            <h2 class="text-center"> No  Tags Found! </h2>
            @endif
            
            
        <form action="{{route('tag.destroy', $tag)}}" method="POST">
                @csrf 
                @method('delete')
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delete tag</h5>
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
                                {{-- <a href="{{route('tag.destroy', $tag)}}" class="btn btn-danger">Delete</a> --}}
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