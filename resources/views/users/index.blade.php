@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-end">
     
        
    </div>
    
    <div class="card card-default ">
        
        <div class="card-header">Users</div>
        
        <div class="card-body">
            @if ($users->count()>=1)
            <table class="table table-stripped">
                
                <th>Name</th>
                
                <th>Email</th>

                @foreach ($users as $user)
                <tr>
                <td><img src="{{Gravatar::src($user->email)}}" alt=""></td>
                    <td>{{ $user->name}} </td>
                    <td>{{ $user->email}} </td>
                    <td>
                        @if(!$user->isAdmin())
                        <form action="/users/{{$user->id}}/update" method="POST">
                            @csrf
                            {{-- @method('UPDATE') --}}
                            <button type="submit" class="btn btn-primary btn-sm">make Admin</button>
                        </form>
                        @endif
                    </td>
                   
                </tr>
                
                @endforeach
            </table>
            @else
            <h2 class="text-center"> No  users Found! </h2>
            @endif
            
            
       
    </div>
    
    
    
    
    
    
    
</div> 



@endsection