@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-end">
        <a href="{{route('post.create')}}" class="btn btn-success col-3 mb-1">Add Post </a>
       
    </div>

        <div class="card card-default">
            <div class="card-header">Posts</div>
            <div class="card-body">
                @if ($posts->count()>=1)
               
                <table class="table">
                   
                    <th>Image</th>
                    <th>Title</th>
                    <th>Categories</th>
                    <th></th>
                
                    @foreach ($posts as $post)
                    <tr>
                        <td><img src="{{ asset('/storage/'.$post->image) }}" alt="" width="200px" height="150px" ></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td> @if(!$post->trashed())
                        </td>
                        <td> <a href="{{route('post.edit', $post->id) }}" class="btn btn-info">edit</a><td>
                            @endif
                         <td>  <form action="{{route('post.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"> 
                                {{ $post->trashed()? 'Delete' : 'Trash' }}    
                            </button>
                        
                        </form>
                         </td>
                  
                    </tr>
                    @endforeach
                </table>
                @else
                <h2 class="text-center"> No Post Found! </h2>
                @endif
    
              
                
               

            </div>
        </div>
</div>
    
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
    
@endsection