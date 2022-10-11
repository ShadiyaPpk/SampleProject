@extends('layouts.user')
@section('content')
<h2 class="mt-3">Profile</h2>
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb item"><a href="/user/userdashboard"></a></li>
		<li class="breadcrumb item">Profile</li>
	</ol>
</nav>
<div class="row mt-4">
	@if(session()->has('success'))
    <div class="alert alert-success">
    	{{ session()->get('success') }}
    </div>
	@endif
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">Edit</div>
			<div class="card-body">
				<form method="POST" action="{{ route('profile.edit_validation')}}">
					@csrf
					<div class="form-group mb-3">
						<label><b>Name:</b></label>
   						<input type="text" name="name" class="form-control" placeholder="name" value="{{ $data->name }}">
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
					</div>
					<div class="form-group mb-3"> 
						<label><b>E-mail:</b></label>
						<input type="text" name="email" class="form-control" placeholder="email" value="{{ $data->email }}">
						@if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
					</div>
					<div class="form-group mb-3"> 
						<label><b>Password:</b></label>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<div class="form-group mb-3">
						<input type="submit" class="btn btn-primary" value="Edit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection