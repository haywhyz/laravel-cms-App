@extends('layouts.app');
@section('content')
<div class="card card-default ">
       
    <div class="card-header">Edit Categories</div>
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
    <form action="{{route('category.update', $category)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Name </label>
            <input type="text" class="form-control" name="name" value="{{$category->name}}">
        </div>
        
        <div class="form-group">
        <button type="submit" class=" form-control btn btn-success" > Submit </button>
        </div>
    </form>



@endsection





