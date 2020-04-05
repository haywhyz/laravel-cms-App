@extends('layouts.app');
@section('content')
<div class="card card-default ">
       
    <div class="card-header">Categories</div>
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
    <form action="{{route('category.store, $category')}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name </label>
            <input type="text" class="form-control" name="name">
        </div>
        
        <div class="form-group">
        <button type="submit" class=" form-control btn btn-success" > Submit </button>
        </div>
    </form>



@endsection





