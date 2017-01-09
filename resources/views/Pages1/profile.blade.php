@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                
                <div class="panel-body">
                    <p>
                        Your Age Is 
                        @age([1993 , 6 , 1])      
                    </p>
                    <p>
                      @sayHello('Shalan')
                    </p>
                    
                    <p>   {{$married}} </p>
                   
                    <p>{{$test}}</p>
                    <p>{{$age}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
