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
			<div class="col-lg-12 clear-padding-xs">
				<div class="col-md-12">
					<div class="dash-item first-dash-item">
						<h6 class="item-title"><i class="fa fa-user"></i>STUDENT INFO</h6>
						<form method="POST" action="{{ route('register') }}">
							@csrf
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
						</form>
					</div>
					<div class="dash-item">
						<h6 class="item-title"><i class="fa fa-user-secret"></i>PARENT INFO</h6>
						<div class="inner-item">
							<div class="dash-form">
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>FATHER NAME</label>
									<input id="father_name" type="text" class="form-control @error('father_name') is-invalid @enderror" name="father_name" value="{{ old('father_name') }}" required autocomplete="father_name">
									@error('father_name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>MOTHER NAME</label>
									<input id="mother_name" type="text" class="form-control @error('mother_name') is-invalid @enderror" name="mother_name" value="{{ old('mother_name') }}" required autocomplete="mother_name">
									@error('mother_name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-briefcase"></i>OCCUPATION</label>
									<input id="occupation" type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation">
									@error('occupation')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="col-sm-3">
									<label class="clear-top-margin"><i class="fa fa-phone"></i> FATHER CONTACT</label>
									<input id="father_phone" type="text" class="form-control @error('father_phone') is-invalid @enderror" name="father_phone" value="{{ old('father_phone') }}" required autocomplete="father_phone">
									@error('father_phone')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-3">
									<label><i class="fa fa-phone"></i>MOTHER CONTACT</label>
									<input id="alter_phone" type="text" class="form-control @error('alter_phone') is-invalid @enderror" name="alter_phone" value="{{ old('alter_phone') }}" required autocomplete="alter_phone">
									@error('alter_phone')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-envelope-o"></i>EMAIL</label>
									<input id="parent_email" type="text" class="form-control @error('parent_email') is-invalid @enderror" name="parent_email" value="{{ old('parent_email') }}" required autocomplete="parent_email">
									@error('parent_email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
									@enderror
								</div>
								<div class="col-sm-3">
									<label><i class="fa fa-bell-o"></i>RELIGION</label>
									<select name="parent_religion">
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
								<div class="clearfix"></div>
								<div class="col-sm-12">
									<br>
									<button type="submit" class="btn btn-primary">
										{{ __('Register') }}
									</button>
								</div>
							</div>
							<div class="clearfix"></div>
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