@extends('layouts.app');
@section('content')
<div class="card card-default ">
       
    <div class="card-header">
        
        {{ isset($category)? 'Edit Category' : 'Create Category' }}
        {{-- @php
         if(isset('$categories')) {
             echo "Edit";
         }else {
             echo "create";
         }

         
        @endphp  --}}


            
        
    </div>
    @if($errors->any())
        <div class=" alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error )
                <li class="list-group-item">
                    {{$error}}
                </li>
                @endforeach
               
            </ul>
        </div>

    @endif

    <div class="card-body">
    <form action=" {{ isset($category)? route('category.update', $category->id): route('category.store') }}" method="POST">
        @csrf
        @if (isset($category))
           @method('PUT') 
        @endif
        
        <div class="form-group">
            <label>Name </label>
            <input type="text" class="form-control" name="name" value=" {{ isset($category)? $category->name : '' }}">
        </div>
        
        <div class="form-group">
        <button type="submit" class=" form-control btn btn-success" > {{ isset($category)? 'Update Category' : 'Create Category'  }} </button>
        </div>
    </form>



@endsection





