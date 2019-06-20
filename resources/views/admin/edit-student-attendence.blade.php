@extends('layouts.teacher.master')
@section('content')
<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
                        <div class="row">
                                <div class="col-lg-12 clear-padding-xs">
                                    <div class="col-lg-12">
                                        <div class="dash-item first-dash-item">
                                            <h6 class="item-title"><i class="fa fa-pencil"></i>ADD ATTENDENCE</h6>
                                            <div class="inner-item dash-form">
                                                @foreach ($attendance as $att)


                                            <form method="POST" action="/admin/attendence/{{ $att->id }}">
                                                    {{ csrf_field() }}
                                                    {{ method_field('put') }}
                                                <div class="col-sm-3">
                                                        <label class="clear-top-margin"><i class="fa fa-user-circle-o"></i>STUDENT NAME</label>
                                                <input name="name" type="text" value="{{ $att->student }}">
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="clear-top-margin"><i class="fa fa-calendar"></i>DATE</label>
                                                    <input name="date" value="{{ $att->date }}" id="studentDOB" placeholder="YYYY/MM/DD" class="hasDatepicker">
                                                </div>
                                                <div class="col-sm-3">
                                                        <label class="clear-top-margin"><i class="fa fa-calendar-check-o"></i>STATUS</label>
                                                        <select name="status">
                                                            <option>-- Select --</option>
                                                            <option>Masuk</option>
                                                            <option>Izin</option>
                                                            <option>Alfa</option>
                                                        </select>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                <div class="clearfix"></div>
                                                <div class="table-action-box">
                                                       <button type="submit" class="save"><i class="fa fa-check"></i>Save</button>
                                                </div>
                                                <div class="clearfix"></div>
                                            </form>
                                            @endforeach
                                            </div>
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
