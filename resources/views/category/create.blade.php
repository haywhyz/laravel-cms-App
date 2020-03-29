@extends('layouts.app');
$@section('content')
<h2 class="text-center">Create new Todo </h2>
<div class="container-fluid">
           

    <form action="/store-category" method="POST">
        @csrf
        <div class="form-group">
            <label>Name </label>
            <input type="text" class="form-control" name="name">
        </div>
        
        <div class="form-group">
        <button type="submit" class=" form-control btn btn-success" > Submit </button>
        </div>
    </form>

</div>

@endsection





