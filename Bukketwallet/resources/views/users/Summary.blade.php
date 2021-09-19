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
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
	<div class="row">
		<div class="span2"></div>
		<div class="span8">
			<table style="text-align: center;">
				<tr>
					<th>Wallete Balance</th>
					<th>Total of incoming</th>
					<th>Total of outcome</th>
				</tr>
				<tbody>
					<tr>
						<td>{{$data[0]['currency'].' '.$data[0]['balance']}}</td>
						<td>{{$userin}}</td>
						<td>{{$userout}}</td>
					</tr>
				</tbody>
			</table>
			<table style="text-align: center;">
				<tr>
					<th>Transaction ID</th>
					<th>Transaction Type</th>
					<th>Tran. type Category</th>
					<th>Amount</th>
					<th>Date of Transaction</th>
				</tr>
				<tbody>
					@foreach($userTra as $value)
					<tr>
						<td>{{$value['tran_id']}}</td>
						@if($value['cat_id']==1)
						<td>Income</td>
						@else
						<td>Out Come</td>
						@endif
						@foreach($subcat as $val2)
						@if($value['subcat_id']==$val2->sub_id)
						<td>{{$val2['sub_name']}}</td>
						@endif
						@endforeach
						<td>{{$value['amount']}}</td>
						<td>{{$value['date_ing']}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="span2"></div>
	</div>
	<div class="span12">

	</div>
</div>
</div>
@endsection