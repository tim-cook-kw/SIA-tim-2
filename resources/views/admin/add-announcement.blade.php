@extends('layouts.admin.master')
@section('content')
<div class="main-content" id="content-wrapper">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<h5 class="page-title"><i class="fa fa-bullhorn"></i>ALL ANNOUNCEMENTS</h5>
							<div class="section-divider"></div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 clear-padding-xs">
							<div class="col-sm-4">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-plus-circle"></i>ADD ANNOUNCEMENT</h6>
									<div class="inner-item">
										<div class="dash-form">
<<<<<<< HEAD
<<<<<<< HEAD
										<form method="post" action="/dashboard/admin/addannouncement/store">
=======
										<form method="post" action="/admin/addannouncement/store">
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
										{{ csrf_field() }}
											<label><i class="fa fa-code"></i>SUBJECT</label>
											<input type="text" name="subject" placeholder="Subject" />
											@if($errors->has('subject'))
                                				<div class="text-danger">
                                    				{{ $errors->first('subject')}}
                                				</div>
                            				@endif
											<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
											<textarea placeholder="Enter Description Here" name="description"></textarea>
											@if($errors->has('description'))
                                				<div class="text-danger">
                                    				{{ $errors->first('description')}}
                                				</div>
                            				@endif
											<label><i class="fa fa-user"></i>CREATED BY</label>
											<input type="text" name="created_by" placeholder="Created By" />
											@if($errors->has('created_by'))
                                				<div class="text-danger">
                                    				{{ $errors->first('created_by')}}
                                				</div>
                            				@endif
											<div>
											<input type="submit" class="btn btn-success" value="Create">
											</div>
										</form>
<<<<<<< HEAD
=======
											<label class="clear-top-margin"><i class="fa fa-cogs"></i>TYPE</label>
											<select>
												<option>-- Select --</option>
												<option>Academic</option>
												<option>Administrative</option>
												<option>Sports</option>
											</select>
											<label><i class="fa fa-user-secret"></i>FOR</label>
											<select>
												<option>-- Select --</option>
												<option>All</option>
												<option>Teacher</option>
												<option>Student</option>
											</select>
											<label><i class="fa fa-code"></i>SUBJECT</label>
											<input type="text" placeholder="Subject" />
											<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
											<textarea placeholder="Enter Description Here"></textarea>
											<div>
												<a href="#"><i class="fa fa-paper-plane"></i> CREATE</a>
											</div>
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
=======
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="dash-item first-dash-item">
									<h6 class="item-title"><i class="fa fa-bullhorn"></i>ALL ANNOUNCEMENTS</h6>
									<div class="inner-item">
										<table id="attendenceDetailedTable" class="display responsive nowrap" cellspacing="0" width="100%">
											<thead>
												<tr>
<<<<<<< HEAD
<<<<<<< HEAD
=======
													<th><i class="fa fa-cogs"></i>TYPE</th>
													<th><i class="fa fa-user-secret"></i>FOR</th>
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
=======
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
													<th><i class="fa fa-user-info"></i>SUBJECT</th>
													<th><i class="fa fa-info-circle"></i>DESCRIPTION</th>
													<th><i class="fa fa-user"></i>CREATED BY</th>
													<th><i class="fa fa-sliders"></i>ACTION</th>
												</tr>
											</thead>
											<tbody>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
												@foreach($news as $n)
												<tr>
													<td>{{ $n->subject }}</td>
													<td>{{ $n->description }}</td>
													<td>{{ $n->created_by }}</td>
													<td class="action-link">
														<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a>
<<<<<<< HEAD
														<a class="delete" href="/dashboard/admin/addannouncement/delete/{{ $n->id }}" title="Delete"><i class="fa fa-remove"></i></a>
													</td>
												</tr>
												@endforeach
=======
												<tr>
													<td>Academic</td>
													<td>All</td>
													<td>End Term Exam</td>
													<td>Description goes here.</td>
													<td>John Doe</td>
													<td class="action-link">
														<a class="edit" href="#" title="Edit" data-toggle="modal" data-target="#editDetailModal"><i class="fa fa-edit"></i></a>
														<a class="delete" href="#" title="Delete" data-toggle="modal" data-target="#deleteDetailModal"><i class="fa fa-remove"></i></a>
													</td>
												</tr>
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
=======
														<a class="delete" href="/admin/addannouncement/delete/{{ $n->id }}" title="Delete"><i class="fa fa-remove"></i></a>
													</td>
												</tr>
												@endforeach
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
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
				
<<<<<<< HEAD
				<!-- Delete Modal -->
				<div id="deleteDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-trash"></i>DELETE CLASS</h4>
							</div>
							<div class="modal-body">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>YES</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
				
=======
>>>>>>> 83a47bd00f5a987df0ef1a4ced30a726348ee6d2
				<!--Edit details modal-->
				<div id="editDetailModal" class="modal fade" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title"><i class="fa fa-edit"></i>EDIT CLASS DETAILS</h4>
							</div>
							<div class="modal-body dash-form">
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-book"></i>CLASS</label>
									<input type="text" placeholder="CLASS" value="5 STD" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-code"></i>CLASS CODE</label>
									<input type="text" placeholder="CLASS CODE" value="PTH05" />
								</div>
								<div class="col-sm-4">
									<label class="clear-top-margin"><i class="fa fa-user-secret"></i>CLASS TEACHER</label>
									<select>
										<option>-- Select --</option>
										<option>Lennore Doe</option>
										<option>John Doe</option>
									</select>
								</div>
								<div class="clearfix"></div>
								<div class="col-sm-12">
									<label><i class="fa fa-info-circle"></i>DESCRIPTION</label>
									<textarea placeholder="Enter Description Here"></textarea>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<div class="table-action-box">
									<a href="#" class="save"><i class="fa fa-check"></i>SAVE</a>
									<a href="#" class="cancel" data-dismiss="modal"><i class="fa fa-ban"></i>CLOSE</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
            @endsection