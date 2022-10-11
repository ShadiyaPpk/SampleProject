@extends('users.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Users Page</div>
  <div class="card-body">
      <form action="{{ url('users') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"> <a href="{{ URL::previous() }}" class="btn btn-dark">Back</a>
    </form>
  </div>
</div>
 
@stop