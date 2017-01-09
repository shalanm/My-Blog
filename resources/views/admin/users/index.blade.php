@extends('layouts.app')
@section('content')
<div clas ="row">
    <h3>{{ $users->total() }} total users</h3>
    <p>in this page( {{ $users->count() }} users)</p>
    <div col-md-6 col-md-offset-3>
         <ul class ="list-group">
        @forelse($users as $user)
         <li class ="list-group-item" style="margin-top: 20px">
                <span>
                    {{$user->name}}
                </span>
                <span class="pull-right clearfix">
                    Joined({{$user->created_at->diffForHumans()}})
                </span>
                <button class ="btn btn-xs btn-primary">follow </button>
          </li>
        @empty
        <p>No Users Available</p>
        @endforelse
        {{$users->links()}}
         </ul>
        
       
        
 
        
        
    </div>
    
</div>


@endsection

