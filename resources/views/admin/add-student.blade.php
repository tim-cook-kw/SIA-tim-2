@extends('layouts.admin.master')
@section('content')
<div class="main-content" id="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 clear-padding-xs">
				<h5 class="page-title"><i class="fa fa-user"></i>ADD STUDENT</h5>
				<div class="section-divider"></div>
			</div>
		</div>
		<div class="row">
			<form method="POST" action="{{ route('addStudent') }}">
				@csrf
				<div class="col-lg-12 clear-padding-xs">
					<div class="col-md-12">
						<div class="dash-item first-dash-item">
							<h6 class="item-title"><i class="fa fa-user"></i>STUDENT INFO</h6>
							<div class="inner-item">
								<div class="dash-form">
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FIRST NAME</label>
										<input id="student_first_name" type="text" class="form-control @error('student_first_name') is-invalid @enderror" name="student_first_name" value="{{ old('student_first_name') }}" required autocomplete="student_first_name">
										@error('student_first_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>LAST NAME</label>
										<input id="student_last_name" type="text" class="form-control @error('student_last_name') is-invalid @enderror" name="student_last_name" value="{{ old('student_last_name') }}" required autocomplete="student_last_name">
										@error('student_last_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>NICK NAME</label>
										<input id="student_nick_name" type="text" class="form-control @error('student_nick_name') is-invalid @enderror" name="student_nick_name" value="{{ old('student_nick_name') }}" required autocomplete="student_nick_name">
										@error('student_nick_name')
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
										<input id="student_place_of_birth" type="text" class="form-control @error('student_place_of_birth') is-invalid @enderror" name="student_place_of_birth" value="{{ old('student_place_of_birth') }}" required autocomplete="student_place_of_birth">
										@error('student_place_of_birth')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>DAY OF BIRTH</label>
										<select name="student_day_birth">
											@foreach(range(1,31) as $day)
											<option value="{{strlen($day)==1 ? '0'.$day : $day}}">
												{{strlen($day)==1 ? '0'.$day : $day}}
											</option>
											@endforeach
										</select>
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>MONTH OF BIRTH</label>
										<select name="student_month_birth">
											@foreach(range(1,12) as $month)
											<option value="{{$month}}">
												{{date("M", strtotime('2016-'.$month))}}
											</option>
											@endforeach
										</select>
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>YEAR OF BIRTH</label>
										<select name="student_year_birth">
											@for ($year = date('Y'); $year > date('Y') - 100; $year--)
											<option value="{{$year}}">
												{{$year}}
											</option>
											@endfor
										</select>

									</div>
									<div class="clearfix"></div>
									<div class="col-sm-3">
										<label><i class="fa fa-phone"></i>STUDENT CONTACT</label>
										<input id="student_phone" type="text" class="form-control @error('student_phone') is-invalid @enderror" name="student_phone" value="{{ old('student_phone') }}" required autocomplete="student_phone">
										@error('student_phone')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-envelope-o"></i>EMAIL</label>
										<input id="student_email" type="text" class="form-control @error('student_email') is-invalid @enderror" name="student_email" value="{{ old('student_email') }}" required autocomplete="student_email">
										@error('student_email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-bell-o"></i>RELIGION</label>
										<select name="student_religion">
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
										<input id="student_nasionality" type="text" class="form-control @error('student_nasionality') is-invalid @enderror" name="student_nasionality" value="{{ old('student_nasionality') }}" required autocomplete="student_nasionality">
										@error('student_nasionality')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="clearfix"></div>
									<div class="col-sm-3">
										<label><i class="fa fa-home"></i>ADDRESS</label>
										<input id="student_address" type="text" class="form-control @error('student_address') is-invalid @enderror" name="student_address" value="{{ old('student_address') }}" required autocomplete="student_address">
										@error('student_address')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-flag"></i>COUNTRY</label>
										<input id="student_country" type="text" class="form-control @error('student_country') is-invalid @enderror" name="student_country" value="{{ old('student_country') }}" required autocomplete="student_country">
										@error('student_country')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-id-card"></i>STATE</label>
										<input id="student_state" type="text" class="form-control @error('student_state') is-invalid @enderror" name="student_state" value="{{ old('student_state') }}" required autocomplete="student_state">
										@error('student_state')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-code"></i>ZIP</label>
										<input id="student_zip" type="text" class="form-control @error('student_zip') is-invalid @enderror" name="student_zip" value="{{ old('student_zip') }}" required autocomplete="student_zip">
										@error('student_zip')
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
						<!-- <div class="dash-item">
							<h6 class="item-title"><i class="fa fa-user-secret"></i>FATHER INFO</h6>
							<div class="inner-item">
								<div class="dash-form">
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FIRST NAME</label>
										<input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name">
										@error('first_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>LAST NAME</label>
										<input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name">
										@error('last_name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>NICK NAME</label>
										<input id="nick_name" type="text" class="form-control @error('nick_name') is-invalid @enderror" name="nick_name" value="{{ old('nick_name') }}" required autocomplete="nick_name">
										@error('nick_name')
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
										<input id="place_of_birth" type="text" class="form-control @error('place_of_birth') is-invalid @enderror" name="place_of_birth" value="{{ old('place_of_birth') }}" required autocomplete="place_of_birth">
										@error('place_of_birth')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>DAY OF BIRTH</label>
										<select name="day_birth">
											@foreach(range(1,31) as $day)
											<option value="{{strlen($day)==1 ? '0'.$day : $day}}">
												{{strlen($day)==1 ? '0'.$day : $day}}
											</option>
											@endforeach
										</select>
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>MONTH OF BIRTH</label>
										<select name="month_birth">
											@foreach(range(1,12) as $month)
											<option value="{{$month}}">
												{{date("M", strtotime('2016-'.$month))}}
											</option>
											@endforeach
										</select>
									</div>
									<div class="col-sm-3">
										<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>YEAR OF BIRTH</label>
										<select name="year_birth">
											@for ($year = date('Y'); $year > date('Y') - 100; $year--)
											<option value="{{$year}}">
												{{$year}}
											</option>
											@endfor
										</select>

									</div>
									<div class="clearfix"></div>
									<div class="col-sm-3">
										<label><i class="fa fa-phone"></i>PHONE #</label>
										<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
										@error('phone')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-envelope-o"></i>EMAIL</label>
										<input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
										@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-bell-o"></i>RELIGION</label>
										<select name="religion">
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
										<input id="nasionality" type="text" class="form-control @error('nasionality') is-invalid @enderror" name="nasionality" value="{{ old('nasionality') }}" required autocomplete="nasionality">
										@error('nasionality')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="clearfix"></div>
									<div class="col-sm-3">
										<label><i class="fa fa-home"></i>ADDRESS</label>
										<input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">
										@error('address')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-flag"></i>COUNTRY</label>
										<input id="country" type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" required autocomplete="country">
										@error('country')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-id-card"></i>STATE</label>
										<input id="state" type="text" class="form-control @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}" required autocomplete="state">
										@error('state')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
									<div class="col-sm-3">
										<label><i class="fa fa-code"></i>ZIP</label>
										<input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip') }}" required autocomplete="zip">
										@error('zip')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
										@enderror
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="clearfix"></div>
						</div> -->
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