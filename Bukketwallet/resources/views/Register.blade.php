@extends('included.layout')
@section('logstate')
<a class="topbar_login" href="#">
	LOGIN <span class="sf-sub-indicator"></span>
</a>

<div id="fast-login" class="access-info-box">
	<form action="" method="post" name="loginform">
		@csrf
		<div class="form">
			<p>
				<label>
					Email<br/>
					<input type="text" tabindex="10" size="60" value="" name="email" class="input-text" required="required" />
				</label>
			</p>

			<p>
				<label>
					Password<br/>
					<input type="password" tabindex="20" size="60" value="" name="pwd" class="input-text" required="required" />
				</label>
			</p>
			<p class="align-left">
				<a tabindex="100" class="btn btn-success" href="/Register">Register</a>
			</p>
			<p class="align-right">
				<input type="submit" tabindex="100" value="Login" name="wp-submit" class="input-submit" />
			</p>
		</div>
	</form>
</div>
</div>
@endsection
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
	<div class="row">
		<div class="span2"></div>
		<div class="span8">
			@if (!empty(Session::has('complete')))
			<div class="alert alert-danger">{{ Session::get('complete') }}</div>
			@endif
			<form action="" method="POST" class="form-horizontal" enctype="multipart/form-data">
				@csrf
				@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				@if(session('complete'))
				<div class="alert alert-success" role="alert">
					{{session('complete')}}
				</div>
				@endif
				<div class="control-group">
					<label class="control-label" for="inputfname">First Name</label>
					<div class="controls">
						<input type="text" id="inputfname" placeholder="First Name" class="span4" required="required" name="fname" value="{{old('fname')}}">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputmname">Mid. Name</label>
					<div class="controls">
						<input type="text" id="inputmname" placeholder="Meddile Name" class="span4" required="required" name="mname" value="{{old('mname')}}">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputlname">Last Name</label>
					<div class="controls">
						<input type="text" id="inputlname" placeholder="last Name" class="span4" required="required" name="lname" value="{{old('lname')}}">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputEmail">Email</label>
					<div class="controls">
						<input type="email" id="inputEmail" class="span4" placeholder="Email" required="required" name="email" value="{{old('email')}}">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="phone">Phone</label>
					<div class="controls">
						<input type="number" style="margin-right: 5px" id="phone" class="input-small" placeholder="Country Key" required="required" min="1" max="2000" maxlength="4" name="conkey" value="{{old('conkey')}}"><span style="font-size: 1rem;">-</span><input style="margin-left: 5px" type="number" id="phone" class="input-medium" placeholder="your Country Key" required="required" max="999999999999" maxlength="15" name="phone" value="{{old('phone')}}">

					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="birthdate">Birthdate</label>
					<div class="controls">
						<input type="date" id="birthdate" placeholder="birthdate" class="span4" required="required" max="2021-01-01" name="birthdate" value="{{old('birthdate')}}">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Password</label>
					<div class="controls">
						<input type="password" id="inputPassword" class="span4" placeholder="Password" required="required" title="Password Must at least 8 letters including Uppercase& Lower case and Dighits and number(0,9)" name="password">
						<small>Password Must at least 8 letters including Uppercase& Lower case and Dighits and number(0,9)</small>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="Retype">Retype Password</label>
					<div class="controls">
						<input type="password" id="Retype" name="Repass" placeholder="Re-type Password" class="span4" required="required">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="Image">Image</label>
					<div class="controls">
						<input type="file" id="Image" class="span4" required="required" name="img" value="{{old('img')}}">
						<small>Maximum size:2MB Allowed Types:jpg,png</small>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="Image">Wallet Currency</label>
					<div class="controls">
						<select class="span3" name="Currency" required="required" value="{{old('Currency')}}">
							<option></option>
							<option value="USD">USD</option>
							<option value="EURO">EURO</option>
							<option value="JOD">JOD</option>
							<option value="GBP">GBP</option>
						</select>
					</div>
				</div>

				<div class="form-actions">
					<button type="submit" name="submit" class="btn btn-primary">Submite Information</button>
					<button type="button"  class="btn">Cancel</button>
				</div>

			</form>
		</div>
		<div class="span2"></div>
	</div>
</div>
@endsection