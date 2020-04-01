@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-end">
        <a href="{{route('category.create')}}" class="btn btn-success col-3 mb-1" >Add Category </a>
    </div>
    
    <div class="card card-default ">
       
        <div class="card-header">Categories</div>
        
        <div class="card-body">
            <h2> hello welcome </h2>
            
        </div>
    </div>
   
    {{-- @foreach($categories as $categorys)
    <ul>id </ul>
    <ul>name </ul>
    <ul>
        <li> {{$categorys->id }}</li>
        <li> {{ $categorys->name}}</li>

    </ul>
    @endforeach --}}


</div> 


    
@endsection