@extends('included.Adminlayout')
@section('name')
{{$admin[0]->fname.' '.$admin[0]->lname}}
@endsection
@section('main')
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0">Data Tables - Print, Excel, CSV, PDF Buttons</h5>
			<p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons">          <button class="btn btn-outline-light buttons-copy buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Copy</span></button> <button class="btn btn-outline-light buttons-excel buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Excel</span></button> <button class="btn btn-outline-light buttons-pdf buttons-html5" tabindex="0" aria-controls="example" type="button"><span>PDF</span></button> <button class="btn btn-outline-light buttons-print" tabindex="0" aria-controls="example" type="button"><span>Print</span></button> <button class="btn btn-outline-light buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example" type="button" aria-haspopup="true"><span>Column visibility</span></button> </div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example" class="table table-striped table-bordered second dataTable" style="width:100%" role="grid" aria-describedby="example_info">
					<thead>
						<tr role="row">
							<th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 148px;">Name</th>
							<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 253px;">Birthday</th>
							<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 106px;">Email</th>
							<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 100px;">Phone Num.</th>
							<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 84px;">Total Incom.</th>
							<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 84px;">Total Outcom.</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach($users as $user)
						<tr role="row" class="even">
							<td class="sorting_1 text-capitalize">{{$user['fname'].' '.$user['lname']}}</td>
							<td>{{$user['birthdate']}}</td>
							<td>{{$user['email']}}</td>
							<td>{{'+'.$user['con_code'].'-'.$user['phone']}}</td>
							@if($Sum['user_id']==$user['user_id'])
							<td>{{$Sum['income']}}</td>
							<td>{{$Sum['outcome']}}</td>
							@endif
						</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<th rowspan="1" colspan="1">Name</th>
							<th rowspan="1" colspan="1">Birthday</th>
							<th rowspan="1" colspan="1">Email</th>
							<th rowspan="1" colspan="1">Phone Num</th>
							<th rowspan="1" colspan="1">Total Incom.</th>
							<th rowspan="1" colspan="1">Total Outcom.</th></tr>
						</tfoot>
					</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example_next"><a href="#" aria-controls="example" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
				</div>
			</div>
		</div>
	</div>
	@endsection