@extends('included.layout')
@section('logstate')
<a class="topbar" href="users/Logout">Logout</a>
@endsection
@section('navmenu')
<li>
	<a href="users/AddSubcategory">Add Subcategory</a>
</li>
<li>
	<a href="users/Transaction">Transaction</a>
</li>
<li>
	<a href="users/Summary">Summary page</a>
</li>
<li>
	<a href="users/charts">Charts & Statics</a>
</li>
@endsection
@section('main')
<div class="container">
	<div class="row">
		<div class="span2"></div>
		<div class="span8">
			<form action="" method="POST" class="form-horizontal">
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
				<div class="control-group">
					<label class="control-label" for="inputEmail">Categorytype</label>
					<div class="controls">
						<select name="catetype" class="input-xlarge" required="required">
							<option></option>
							<option value="1">Incomes</option>
							<option value="2">Epenses</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Own category</label>
					<div class="controls">
						<input type="text" id="inputPassword" class="input-xlarge" placeholder="Your Own Category name" name="catename" required="required">
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="submit" class="btn btn-success btn-large">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<div class="span2"></div>
	</div>
</div>
@endsection