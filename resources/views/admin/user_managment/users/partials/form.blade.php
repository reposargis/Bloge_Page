@if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
<label for=""> Name </label>
<input type="text" name="name" class="form-control" placeholder="Name" value="@if(old('name')) {{ old('name') }} @else {{ $user->name  or ''}} @endif" required>

<label for=""> Email </label>
<input type="email" name="email" class="form-control" placeholder="Email" value="@if(old('email')) {{ old('email') }} @else {{ $user->email  or ''}} @endif" required>

<label for=""> Password </label>
<input type="password" name="password" class="form-control" placeholder="password">

<label for=""> The confirmation </label>
<input type="password" name="password_confirmation" class="form-control" placeholder="confirm password">

<hr />
<input type="submit" value="Save" class="btn btn-primary">


