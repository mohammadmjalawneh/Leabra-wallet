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
<div class="container">
	<div class="row">
		<div id="columnchart_values" class="span12">
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<script type="text/javascript">
				google.charts.load("current", {packages:['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						["Element", "Density", { role: "style" } ],
						["Today",{{$dayR}}, "#b87333"],
						["Month", {{$MonthR}}, "silver"],
						["Year", {{$YearR}}, "gold"]
						]);

					var view = new google.visualization.DataView(data);
					view.setColumns([0, 1,
						{ calc: "stringify",
						sourceColumn: 1,
						type: "string",
						role: "annotation" },
						2]);

					var options = {
						title: "Chart for Your Transactions by Your Currency",
						width: 600,
						height: 400,
						bar: {groupWidth: "95%"},
						legend: { position: "none" },
					};
					var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
					chart.draw(view, options);
				}
			</script>
		</div>
	</div>
</div>
@endsection