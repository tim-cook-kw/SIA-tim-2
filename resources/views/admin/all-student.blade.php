@extends('layouts.admin.master')
@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-user"></i>ALL STUDENT</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<form method="POST" action="{{ route('addStudent') }}">
				@csrf
				<div class="col-lg-12 clear-padding-xs">
					<div class="col-md-12">
						<div class="dash-item first-dash-item">
							<h6 class="item-title"><i class="fa fa-user"></i>STUDENT TABLE</h6>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<br>
					<input type="submit" class="btn btn-primary" value="Add Student">
				</div>
			</form>
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