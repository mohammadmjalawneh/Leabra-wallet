@extends('included.layout')
@section('logstate')
<a class="topbar" href="/Logout">Logout</a>
@endsection
@section('navmenu')
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
@endsection
@section('main')
<style type="text/css">
	textarea {
		resize: none;
	}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#bigcate').change(function() {
			$.ajax({
					url: '/Transaction/' + $(this).val(),
					type: 'GET',
					success: function(data) {
						$('#subcate').html(data);
					}
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
				});

		});
	});
</script>
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
						<select name="catetype" id="bigcate" class="input-xlarge" required="required">
							<option></option>
							<option value="1">Incomes</option>
							<option value="2">Epenses</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="inputPassword">Own category</label>
					<div class="controls">
						<select id="subcate" name="subcate" class="input-xlarge" required="required">
						</select>
					</div>
				</div>
				<div class="control-group">
					<lable class="control-label" for='amount'>Transaction Amount</lable>
					<div class="controls">
						<input type="number" name="amount" id="amount" class="input-xlarge" step="any" placeholder="22.33" required="required">
					</div>
				</div>
				<div class="control-group">
					<lable class="control-label" for='amount'>Transaction Note</lable>
					<div class="controls">
						<textarea class="input-xlarge" name="note"></textarea>
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