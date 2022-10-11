@extends('users.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Userdata Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('users/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="address" id="address" value="{{$users->email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success">  <a href="{{ URL::previous() }}" class="btn btn-dark">Back</a></br>
    </form>
   
  </div>
</div>
 
@stop