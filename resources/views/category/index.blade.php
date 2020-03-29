@extends ('layouts.app')

@section('layout')
<div class="container">
    @foreach($category as $category)
    <ul>id </ul>
    <ul>name </ul>
    <ul>
        <li> {{$category->id }}</li>
        <li> {{ $category->name}}</li>

    </ul>
    @endforeach
</div> 

    
@endsection