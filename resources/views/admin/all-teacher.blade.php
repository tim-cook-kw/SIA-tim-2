@extends('layouts.admin.master')
@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-user"></i>ALL TEACHER</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<div class="col-md-12">
					<div class="dash-item first-dash-item">
						<h6 class="item-title"><i class="fa fa-user"></i>TEACHER TABLE</h6>
						<div class="dash-item first-dash-item">
							<div class="inner-item">
								<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th><i class="fa fa-user-info"></i>ID</th>
											<th><i class="fa fa-user-info"></i>FIRST NAME</th>
											<th><i class="fa fa-user-info"></i>LAST NAME</th>
											<th><i class="fa fa-user-info"></i>NICK NAME</th>
											<th><i class="fa fa-user-info"></i>GENDER</th>
											<th><i class="fa fa-user-info"></i>PLACE OF BIRTH</th>
											<th><i class="fa fa-user-info"></i>DAY OF BIRTH</th>
											<th><i class="fa fa-user-info"></i>MONTH OF BIRTH</th>
											<th><i class="fa fa-user-info"></i>YEAR OF BIRTH</th>
											<th><i class="fa fa-user-info"></i>TEACHER CONTACT</th>
											<th><i class="fa fa-user-info"></i>EMAIL</th>
											<th><i class="fa fa-user-info"></i>RELIGION</th>
											<th><i class="fa fa-user-info"></i>NATIONALITY</th>
											<th><i class="fa fa-user-info"></i>ADDRESS</th>
											<th><i class="fa fa-user-info"></i>COUNTRY</th>
											<th><i class="fa fa-user-info"></i>STATE</th>
											<th><i class="fa fa-user-info"></i>ZIP</th>
										</tr>
									</thead>
									<tbody>
										@foreach($addTeacher as $n)
										<tr>
											<td>{{ $n->id }}</td>
											<td>{{ $n->teacher_first_name }}</td>
											<td>{{ $n->teacher_last_name }}</td>
											<td>{{ $n->teacher_nick_name }}</td>
											<td>{{ $n->teacher_gender }}</td>
											<td>{{ $n->teacher_place_of_birth }}</td>
											<td>{{ $n->teacher_day_birth }}</td>
											<td>{{ $n->teacher_month_birth }}</td>
											<td>{{ $n->teacher_year_birth }}</td>
											<td>{{ $n->teacher_phone }}</td>
											<td>{{ $n->teacher_email }}</td>
											<td>{{ $n->teacher_religion }}</td>
											<td>{{ $n->teacher_nasionality }}</td>
											<td>{{ $n->teacher_address }}</td>
											<td>{{ $n->teacher_country }}</td>
											<td>{{ $n->teacher_state }}</td>
											<td>{{ $n->teacher_zip }}</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu-togggle-btn">
		<a href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars" style="margin-right: 10px;"></i></a>
	</div>
	<div class="dash-footer col-lg-12">
		<p>Copyright Pathshala</p>
	</div>
</div>
@endsection