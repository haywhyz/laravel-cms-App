@extends('layouts.app');
@section('content')
<div class="card card-default ">
       
    <div class="card-header">Categories</div>
    
    <div class="card-body">

           

    <form action="" method="POST">
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





