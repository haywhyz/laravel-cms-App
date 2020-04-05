@extends('layouts.app');
@section('content')

<h2>
    All Category
</h2>
<div class="container-fluid">
    <div class="card text-center my-5" >
        <div class="card-body">
            {{$categories->name}}
        </div>
        <a href="{{route('category.edit')}}" class="btn btn-primary">edit</a>
        <a href="/category/{{$categories->id}}/delete" class="btn btn-danger">delete</a>

    </div>
   
        
  
</div>
    
@endsection