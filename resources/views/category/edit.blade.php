@extends('layout.app');
@section('content')

<div class="container-fluid">
    <form action="/category/{{$categories->id}}/update-category" method="POST">
        @csrf
        <div class="form-group">
            <label>Name </label>
            <input type="text" class="form-control" name="name">
        </div>
        
        <div class="form-group">
        <button type="submit" class=" form-control btn btn-success" > Edit </button>
        </div>
    </form>

</div>
</div>
    
@endsection