@extends('layouts.admin.master')
@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-user"></i>ADD TEACHER</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<form method="POST" action="{{ route('addTeacher') }}">
				@csrf
				<div class="col-lg-12 clear-padding-xs">
					<div class="col-md-12">
						<div class="dash-item first-dash-item">
							<h6 class="item-title"><i class="fa fa-user"></i>TEACHER INFO</h6>
							<div class="inner-item">
								<div class="dash-form">
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FIRST NAME</label>
										<input id="teacher_first_name" type="text" class="form-control @error('teacher_first_name') is-invalid @enderror" name="teacher_first_name" value="{{ old('teacher_first_name') }}" required autocomplete="teacher_first_name">
										@error('teacher_first_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>LAST NAME</label>
										<input id="teacher_last_name" type="text" class="form-control @error('teacher_last_name') is-invalid @enderror" name="teacher_last_name" value="{{ old('teacher_last_name') }}" required autocomplete="teacher_last_name">
										@error('teacher_last_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>NICK NAME</label>
										<input id="teacher_nick_name" type="text" class="form-control @error('teacher_nick_name') is-invalid @enderror" name="teacher_nick_name" value="{{ old('teacher_nick_name') }}" required autocomplete="teacher_nick_name">
										@error('teacher_nick_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-venus"></i>GENDER</label>
										<select name="gender">
											<option value="Male">Male</option>
											<option value="Female">Female</option>
										</select>
									</div>
									<div class="clearfix"></div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>PLACE OF BIRTH</label>
										<input id="teacher_place_of_birth" type="text" class="form-control @error('teacher_place_of_birth') is-invalid @enderror" name="teacher_place_of_birth" value="{{ old('teacher_place_of_birth') }}" required autocomplete="teacher_place_of_birth">
										@error('teacher_place_of_birth')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>DAY OF BIRTH</label>
										<select name="teacher_day_birth">
											@foreach(range(1,31) as $day)
											<option value="{{strlen($day)==1 ? '0'.$day : $day}}">
												{{strlen($day)==1 ? '0'.$day : $day}}
											</option>
											@endforeach
										</select>
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>MONTH OF BIRTH</label>
										<select name="teacher_month_birth">
											@foreach(range(1,12) as $month)
											<option value="{{$month}}">
												{{date("M", strtotime('2016-'.$month))}}
											</option>
											@endforeach
										</select>
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>YEAR OF BIRTH</label>
										<select name="teacher_year_birth">
											@for ($year = date('Y'); $year > date('Y') - 100; $year--)
											<option value="{{$year}}">
												{{$year}}
											</option>
											@endfor
										</select>

									</div>
									<div class="clearfix"></div>
									<div class="col-sm-3">
										<label><i class="fa fa-phone"></i>TEACHER CONTACT</label>
										<input id="teacher_phone" type="text" class="form-control @error('teacher_phone') is-invalid @enderror" name="teacher_phone" value="{{ old('teacher_phone') }}" required autocomplete="teacher_phone">
										@error('teacher_phone')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-envelope-o"></i>EMAIL</label>
										<input id="teacher_email" type="text" class="form-control @error('teacher_email') is-invalid @enderror" name="teacher_email" value="{{ old('teacher_email') }}" required autocomplete="teacher_email">
										@error('teacher_email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-bell-o"></i>RELIGION</label>
										<select name="teacher_religion">
											<option value="islam">Islam</option>
											<option value="buddhism">Buddhism</option>
											<option value="christian">Christian</option>
											<option value="protestant">Protestant</option>
											<option value="hinduism">Hinduism</option>
											<option value="kong hu cu">Kong Hu Cu</option>
										</select>
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-flag"></i>NATIONALITY</label>
										<input id="teacher_nasionality" type="text" class="form-control @error('teacher_nasionality') is-invalid @enderror" name="teacher_nasionality" value="{{ old('teacher_nasionality') }}" required autocomplete="teacher_nasionality">
										@error('teacher_nasionality')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="clearfix"></div>
									<div class="col-sm-3">
										<label><i class="fa fa-home"></i>ADDRESS</label>
										<input id="teacher_address" type="text" class="form-control @error('teacher_address') is-invalid @enderror" name="teacher_address" value="{{ old('teacher_address') }}" required autocomplete="teacher_address">
										@error('teacher_address')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-flag"></i>COUNTRY</label>
										<input id="teacher_country" type="text" class="form-control @error('teacher_country') is-invalid @enderror" name="teacher_country" value="{{ old('teacher_country') }}" required autocomplete="teacher_country">
										@error('teacher_country')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-id-card"></i>STATE</label>
										<input id="teacher_state" type="text" class="form-control @error('teacher_state') is-invalid @enderror" name="teacher_state" value="{{ old('teacher_state') }}" required autocomplete="teacher_state">
										@error('teacher_state')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-code"></i>ZIP</label>
										<input id="teacher_zip" type="text" class="form-control @error('teacher_zip') is-invalid @enderror" name="teacher_zip" value="{{ old('teacher_zip') }}" required autocomplete="teacher_zip">
										@error('teacher_zip')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-sm-12">
					<br>
					<input type="submit" class="btn btn-primary" value="Add Teacher">
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