<div class="row dashboard-top-nav">
			<div class="col-sm-3 logo">
				<h5><i class="fa fa-book"></i>PATHSHALA</h5>
			</div>
			<div class="col-sm-4 top-search">
				<div class="search">
					<i class="fa fa-search"></i>
					<input type="text" placeholder="Search">
				</div>
			</div>
			<div class="col-sm-5 notification-area">
				<ul class="top-nav-list">
					<li class="notification dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell-o"></i>
							<span class="badge nav-badge">3</span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-trophy"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Upcoming Sports Meet</a></h5>
										<h6><i class="fa fa-clock-o"></i> 10 min ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-paint-brush"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Fine art workshop</a></h5>
										<h6><i class="fa fa-clock-o"></i> 1 hour ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-birthday-cake"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Annual fest</a></h5>
										<h6><i class="fa fa-clock-o"></i> 1 day ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 icon clear-padding">
										<i class="fa fa-trophy"></i>
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Upcoming Sports Meet</a></h5>
										<h6><i class="fa fa-clock-o"></i> 10 min ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="all-notifications">
									<a href="#">VIEW ALL NOTIFICATIONS</a>
								</div>
							</li>
						</ul>
					</li>
					<li class="message dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-comment-o"></i>
							<span class="badge nav-badge">5</span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>
								<div class="list-msg">
									<div class="col-xs-2 image clear-padding">
										<img src="assets/img/parent/parent2.jpg" alt="user" />
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">John Doe</a></h5>
										<p>Lorem Ipsum is simply dummy text.</p>
										<h6><i class="fa fa-clock-o"></i> 1 day ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="list-msg">
									<div class="col-xs-2 image clear-padding">
										<img src="assets/img/parent/parent2.jpg" alt="user" />
									</div>
									<div class="col-sm-10 desc">
										<h5><a href="#">Lenore Doe</a></h5>
										<p>Lorem Ipsum is simply dummy text.</p>
										<h6><i class="fa fa-clock-o"></i> 1 day ago</h6>
									</div>
									<div class="clearfix"></div>
								</div>
							</li>
							<li>
								<div class="all-notifications">
									<a href="#">VIEW ALL MESSAGES</a>
								</div>
							</li>
						</ul>
					</li>
					<li class="user dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span><img src="assets/img/parent/parent2.jpg" alt="user">JOHN DOE<span class="caret"></span></span>
						</a>
						<ul class="dropdown-menu notification-list">
							<li>
<<<<<<< HEAD
								<a href="#"><i class="fa fa-cogs"></i> SETTINGS</a>
							</li>
							<li>
=======
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
								<a href="#"><i class="fa fa-users"></i> USER PROFILE</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-key"></i> CHANGE PASSWORD</a>
							</li>
							<li>
<<<<<<< HEAD
								<a href="#"><i class="fa fa-cogs"></i> SETTINGS</a>
							</li>
							<li>
								<div class="all-notifications">
									<a href="#">LOGOUT</a>
								</div>
=======
								<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
>>>>>>> 46dff0d07655cfecc9d2f8bf2db6480ccfc570d0
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
