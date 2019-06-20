@extends('layouts.student.master')
@section('content')
<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-bar-chart"></i>ATTENDENCE DETAILED</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-search"></i>VIEW DETAILED ATTENDENCE</h6>
									<div class="inner-item dash-search-form">
										<div class="col-sm-6 col-md-3">
											<label>START DATE</label>
											<input id = "startDate" type="text" placeholder="MM/DD/YYYY"/>
										</div>
										<div class="col-sm-6 col-md-3">
											<label>END DATE</label>
											<input id = "endDate" type="text" placeholder="MM/DD/YYYY"/>
										</div>
										<div class="clearfix visible-sm"></div>
										<div class="col-sm-6 col-md-3">
											<label>COURSE CODE</label>
											<select>
												<option>Basic Mathematics (MTH101)</option>
												<option>Physics (PHY101)</option>
												<option>Biology (BIO101)</option>
											</select>
										</div>
										<div class="col-sm-6 col-md-3">
											<button type="submit" class="submit-btn"><i class="fa fa-search"></i>SEARCH</button>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-book"></i>BASIC MATHEMATICS (MTH101)</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
													<th><i class="fa fa-book"></i>COURSE CODE</th>
													<th><i class="fa fa-calendar"></i>DATE</th>
													<th><i class="fa fa-clock-o"></i>TIMING</th>
													<th><i class="fa fa-check"></i>STATUS</th>
													<th><i class="fa fa-user"></i>TEACHER NAME</th>
													<th><i class="fa fa-ban"></i>ATTENDENCE BLOCKED</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Aug 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-danger">Absent</td>
													<td>Lennore Doe</td>
													<td class="text-danger">YES</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Aug 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-danger">Absent</td>
													<td>Lennore Doe</td>
													<td class="text-danger">YES</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Jul 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-success">Present</td>
													<td>Lennore Doe</td>
													<td class="text-success">No</td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>17 Aug 2017</td>
													<td>9:00 - 10:00 AM</td>
													<td class="text-danger">Absent</td>
													<td>Lennore Doe</td>
													<td class="text-danger">YES</td>
												</tr>
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