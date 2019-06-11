@extends('layouts.teacher.master')
@section('content')
<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-bar-chart"></i>ATTENDENCE REPORT</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
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
											<label>COURSE CODE</label>
											<select>
												<option>MTH101</option>
												<option>MTH102</option>
												<option>MTH103</option>
												<option>MTH104</option>
											</select>
										</div>
										<div class="clearfix visible-sm"></div>
										<div class="col-md-3 col-sm-6">
											<label>START DATE</label>
											<input type="text" id="startDate" placeholder="MM/DD/YYYY"/>
										</div>
										<div class="col-md-3 col-sm-6">
											<label>END DATE</label>
											<input type="text" id="endDate" placeholder="MM/DD/YYYY" />
										</div>
										<div class="clearfix"></div>
										<div class="col-sm-3">
											<button type="submit" class="submit-btn"><i class="fa fa-search"></i>SELECT</button>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="col-md-6">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-line-chart"></i>GRAPH REPORT</h6>
									<div class="inner-item">
										<div class="summary-chart">
											<canvas id="studentAttendenceLine"></canvas>
											<div class="chart-legends">
												<span class="red">ABSENT</span>
												<span class="orange">ON LEAVE</span>
												<span class="green">PRESENT</span>
											</div>
											<div class="chart-title">
												<h6 class="bottom-title">STUDENT ATTENDENCE REPORT</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="dash-item">
									<h6 class="item-title"><i class="fa fa-list"></i>TABLE REPORT</h6>
									<div class="inner-item">
										<div>
											<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
												<thead>
													<tr>
														<th><i class="fa fa-calendar"></i>MONTH</th>
														<th><i class="fa fa-ban"></i>ABSENT</th>
														<th><i class="fa fa-exclamation"></i>LEAVE</th>
														<th><i class="fa fa-check"></i>PRESENT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>JAN</td>
														<td>12</td>
														<td>20</td>
														<td>100</td>
													</tr>
													<tr>
														<td>FEB</td>
														<td>12</td>
														<td>20</td>
														<td>100</td>
													</tr>
													<tr>
														<td>MAR</td>
														<td>12</td>
														<td>20</td>
														<td>100</td>
													</tr>
													<tr>
														<td>APR</td>
														<td>12</td>
														<td>20</td>
														<td>100</td>
													</tr>
												</tbody>
											</table>
										</div>
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