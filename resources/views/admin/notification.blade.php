@extends("layouts.admin")

@section("content")
    
<div class="row">
	<div class="col-12">
		@include("layouts.msg")
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Reminder</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="table-responsive">
					<table id="dp" class="table table-bordered table-striped">
						<thead>
							<th>S/N</th>
							<th>Patient Record ID (PepID)</th>
							<th>Patient Name</th>
							<th>Phone Number</th>
							<th>Department</th>
							<th>Appointment Date</th>
							<th>Reminder</th>
							<th>Message Delivered Date</th>
						</thead>
						<tbody>
							@php
                                $q = DB::select("SELECT * FROM attendances WHERE reminder = 1 OR reminder = 2 ORDER BY id");
                                
                            @endphp
                            @forelse($q as $r)
	                            @php
	                                $x['id'] = $r->id;
	                            @endphp
                            	<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $r->PepID }}</td>
									<td>{{ $r->name }}</td>
									<td>{{ $r->PhoneNo }}</td>
									<td>{{ $r->FacultyName }}</td>
									<td>{{ $r->date }}</td>
                                    @if ($r->reminder == 1)
                                        <td><h5 class="font-weight-600 mb-0 badge badge-pill badge-warning">Two Weeks Before</h5></td>
                                        <td>{{ date('d-F-Y', strtotime($r->r1_date)) }}</td>
                                    @else
                                        <td><h5 class="font-weight-600 mb-0 badge badge-pill badge-primary">A DayBefore</h5></td>
                                        <td>{{ date('d-F-Y', strtotime($r->r2_date)) }}</td>
                                    @endif
									
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
</div>
<div class="row">
	<div class="col-12">
		@include("layouts.msg")
		<div class="box">
			<div class="box-header with-border">
				<h3 class="box-title">Missed Appointments</h3>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="table-responsive">
					<table id="dp" class="table table-bordered table-striped">
						<thead>
							<th>S/N</th>
							<th>Patient Record ID (PepID)</th>
							<th>Patient Name</th>
							<th>Phone Number</th>
							<th>Department</th>
							<th>Appointment Date</th>
							<th>Reminder</th>
							<th>Message Delivered Date</th>
						</thead>
						<tbody>
							@php
                                $q = DB::select("SELECT * FROM attendances WHERE flag = 1 ORDER BY id");
                                
                            @endphp
                            @forelse($q as $r)
	                            @php
	                                $x['id'] = $r->id;
	                            @endphp
                            	<tr>
									<td>{{ $loop->iteration }}</td>
									<td>{{ $r->PepID }}</td>
									<td>{{ $r->name }}</td>
									<td>{{ $r->PhoneNo }}</td>
									<td>{{ $r->FacultyName }}</td>
									<td>{{ $r->date }}</td>
                                    <td><h5 class="font-weight-600 mb-0 badge badge-pill badge-danger">{{ $r->status }}</h5></td>
                                    <td>{{ date('d-F-Y', strtotime($r->r2_date)) }}</td>
									
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
</div>
@endsection