@extends('layouts.admin.master')
@section('content')
<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-bar-chart"></i>ATTENDENCE SUMMARY</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-md-5">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-bar-chart"></i>MY ATTENDENCE</h6>
									<div class="inner-item">
										<div class="summary-chart">
											<canvas id="studentAttendenceSummary" height = 230px></canvas>
											<div class="chart-legends">
												<span class="red"><60%</span>
												<span class="orange"><75%</span>
												<span class="green">>75%</span>
											</div>
											<div class="chart-title">
												<h6 class="bottom-title">ATTENDENCE SUMMARY BAR</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-info-circle"></i>ATTENDENCE DETAILS</h6>
									<div class="inner-item">
										<div class="item-header">
											<div class="col-xs-4">
												<h6>COURSE CODE</h6>
											</div>
											<div class="col-xs-2">
												<h6>LAST CLASS ATT.</h6>
											</div>
											<div class="col-xs-2">
												<h6>TOTAL CLASSES</h6>
											</div>
											<div class="col-xs-2">
												<h6>CLASSES ATT.</h6>
											</div>
											<div class="col-xs-2">
												<h6>PERCENTAGE</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-4">
												<h6>Basic Math (MTH101)</h6>
											</div>
											<div class="col-xs-2">
												<h6>07/07/2017</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>25</h6>
											</div>
											<div class="col-xs-2">
												<h6>83.30%</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-4">
												<h6>Gravitation (PHY201)</h6>
											</div>
											<div class="col-xs-2">
												<h6>16/07/2017</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>100%</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-4">
												<h6>Elements (CHE101)</h6>
											</div>
											<div class="col-xs-2">
												<h6>10/07/2017</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>100%</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-4">
												<h6>Hindi (LAN201)</h6>
											</div>
											<div class="col-xs-2">
												<h6>12/07/2017</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>100%</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-4">
												<h6>Ice Age (HIS301)</h6>
											</div>
											<div class="col-xs-2">
												<h6>16/07/2017</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>100%</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div class="tbl-row">
											<div class="col-xs-4">
												<h6>Plants (BIO101)</h6>
											</div>
											<div class="col-xs-2">
												<h6>10/07/2017</h6>
											</div>
											<div class="col-xs-2">
												<h6>40</h6>
											</div>
											<div class="col-xs-2">
												<h6>30</h6>
											</div>
											<div class="col-xs-2">
												<h6>80%</h6>
											</div>
											<div class="clearfix"></div>
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