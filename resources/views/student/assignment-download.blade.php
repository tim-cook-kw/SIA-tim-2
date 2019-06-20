@extends('layouts.student.master')
@section('content')
<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-code"></i>ASSIGNMENTS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-lg-12">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-download"></i>DOWNLOAD</h6>
									<div class="inner-item dash-search-form">
										<div class="col-sm-4">
											<label>COURSE CODE</label>
											<select>
												<option>Basic Mathematics (MTH101)</option>
												<option>Physics (PHY101)</option>
												<option>Biology (BIO101)</option>
											</select>
										</div>
										<div class="col-sm-4">
											<label>TYPE</label>
											<select>
												<option>Studey Material</option>
												<option>Assignments</option>
												<option>Others</option>
											</select>
										</div>
										<div class="col-sm-4">
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
													<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
													<th><i class="fa fa-user"></i>TEACHER NAME</th>
													<th><i class="fa fa-calendar"></i>SUBMIT BY</th>
													<th><i class="fa fa-pencil-square-o"></i>REMARKS</th>
													<th><i class="fa fa-link"></i>LINK</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>MTH101</td>
													<td>Basic Mathematics</td>
													<td>Lennore Doe</td>
													<td>20 Aug 2017</td>
													<td>Lorem Ipsum is simply dummy text</td>
													<td><a href="#"><i class="fa fa-download"></i>DOWNLOAD</a></td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>Basic Mathematics</td>
													<td>Lennore Doe</td>
													<td>22 Aug 2017</td>
													<td>Lorem Ipsum is simply dummy text</td>
													<td><a href="#"><i class="fa fa-download"></i>DOWNLOAD</a></td>
												</tr>
												<tr>
													<td>MTH101</td>
													<td>Basic Mathematics</td>
													<td>Lennore Doe</td>
													<td>23 Aug 2017</td>
													<td>Lorem Ipsum is simply dummy text</td>
													<td><a href="#"><i class="fa fa-download"></i>DOWNLOAD</a></td>
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