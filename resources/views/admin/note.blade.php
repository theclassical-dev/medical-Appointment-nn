@extends("layouts.admin")

@section("content")
    
<div class="row">
	<div class="col-md-12 col-sm-12">
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Event Table</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="table-responsive">
					<table id="dt" class="table table-bordered table-striped">
						<thead>
							<th>S/N</th>
							<th>Title</th>
							<th>Short Notes</th>
							<th>Description</th>
							<th>Flyer</th>
							<th>Actions</th>
						</thead>
						<tbody>
							@php
                                $q = DB::select("SELECT * FROM records ORDER BY id DESC");
                            @endphp
                            @forelse($q as $r)
	                            @php
	                                $x['id'] = $r->id;
	                            @endphp
                            	<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $r->title }}</td>
									<td>{{ $r->note }}</td>
									<td>{{ $r->description }}</td>
									<td>{{ $r->image }}</td>
									<td>
										<button class="btn btn-primary btn-sm edtBtn" data-all="{{ (json_encode($r)) }}"><i class="fa fa-edit"></i></button>
										<button class="btn btn-danger btn-sm delBtn" data-all="{{ (json_encode($x)) }}"><i class="fa fa-trash"></i></button>
									</td>
								</tr>
                            @empty

                            @endforelse
							
						</tbody>
					</table>
				</div>
			</div>
			<!-- /.box -->

		</div>
	</div>
</div
@endsection