@extends('users.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Users Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $users->name }}</h5>
        <p class="card-text">Email : {{ $users->email }}</p>
        @foreach($users->phones as $value)
        <p class="card-text">Phone Number {{ $loop->iteration }} :
        {{ $value->phone_no }}
        <br>
        @endforeach
        </p>
        <br><br>
        <a href="{{ URL::previous() }}" class="btn btn-dark">Back</a>
  </div>
       
    </hr>
  
  </div>
</div>