@extends('layouts.admin.master')
@section('content')
<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-pencil-square-o"></i>ATTENDENCE LIST</h5>
							<div class="section-divider"></div>
						</div>
                    </div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-search"></i>MAKE SELECTION</h6>
									<div class="inner-item dash-search-form">
										<div class="col-md-3 col-sm-6">
											<label>CLASS</label>
											<select>
												<option>5th STD</option>
												<option>6th STD</option>
												<option>7th STD</option>
											</select>
										</div>
										<div class="col-md-3 col-sm-6">
											<label>SECTION</label>
											<select>
												<option>PTH05A</option>
												<option>PTH05B</option>
												<option>PTH06A</option>
												<option>PTH06B</option>
											</select>
										</div>
										<div class="clearfix visible-sm"></div>
										<div class="col-md-3 col-sm-6">
											<label>COURSE CODE</label>
											<select>
												<option>MTH101</option>
												<option>MTH102</option>
												<option>MTH103</option>
												<option>MTH104</option>
											</select>
										</div>
										<div class="col-md-3 col-sm-6">
											<label>TIME</label>
											<select>
												<option>09- 10 AM</option>
												<option>10 - 11 AM</option>
												<option>11- 12 PM</option>
												<option>12 - 01 PM</option>
											</select>
										</div>
										<div class="clearfix"></div>
										<div class="col-sm-3">
											<button type="submit" class="submit-btn"><i class="fa fa-search"></i>SELECT</button>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-info-circle"></i>MARK ATTENDENCE</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-puzzle-piece"></i>ROLL #</th>
													<th><i class="fa fa-user"></i>STUDENT</th>
													<th><i class="fa fa-calendar"></i>DATE</th>
                                                    <th><i class="fa fa-check"></i>STATUS</th>
                                                    <th><i class="fa fa-cogs"></i>ACTIONS</th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($attendances as $att)
                                                <tr>
                                                        <td>{{ $att->id }}</td>
                                                        <td>{{ $att->student }}</td>
                                                        <td>{{ $att->date }}</td>
                                                        <td>{{ $att->status }}</td>
                                                        <td>
                                                        <a href="editstudentattendence/{{ $att->id }}" class="fa fa-pencil " ></a>
                                                            <a href="deletestudentattendence/{{ $att->id }}" class="fa fa-trash " ></a>
                                                        </td>
                                                </tr>
                                                @endforeach
												{{-- <tr>
                                                        <td>PTH050A01</td>
                                                        <td>John Doe</td>
                                                        <td>MTH101</td>
                                                        <td>status</td>
                                                        <td>
                                                            <select class="datatable-select">
                                                                <option>Present</option>
                                                                <option>Absent</option>
                                                            </select>
                                                        </td>
                                                        <td><input type="text" placeholder="Remarks" class="datatable-input"/></td>
                                                        <td class="text-success">NO</td>
                                                    </tr> --}}
											</tbody>
										</table>
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
