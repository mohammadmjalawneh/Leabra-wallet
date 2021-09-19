@extends('included.layout')
@section('logstate')
<a class="topbar" href="/Logout">Logout</a>
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

<style type="text/css">
	#table2 {
		margin-left: 150px;
	}

	/*td{
		padding: 5px;
		}*/
	#personal {
		border-radius: 50%;
		margin-left: 40px;
		height: 20rem;
		width: 15rem;
	}
</style>
<div class="cotatiner">
	<div class="row-fluid">
		<div class="span3"></div>
		<div id="table2" class="span6">
			<img id="personal" src="{{url('/uploads/Users/'.$user['0']['img'])}}">
			<table style="">
				<tr>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<h3>Your name</h3>
					</td>
					<td>
						<h3 style="text-transform:capitalize;">{{$user['0']['fname']." ".$user['0']['lname']}}</h3>
					</td>
				</tr>
				<tr>
					<td>
						<h3>Your Phone</h3>
					</td>
					<td>
						<h3 style="text-transform:capitalize;">{{'+'.$user['0']['con_code']."-".$user['0']['phone']}}</h3>
					</td>
				</tr>
				<tr>
					<td>
						<h3>Your Balance</h3>
					</td>
					<td>
						<h3 style="">{{" ".$user['0']['balance']}}</h3>
					</td>
				</tr>
				<tr>
					<td>
						<h3>Your Currancy</h3>
					</td>
					<td>
						<h3>{{$user['0']['currency']}}</h3>
					</td>
				</tr>
			</table>
		</div>
		<div class="span3"></div>
	</div>
</div>
</div>
@endsection