<link href="{{ asset('css/jquery.dataTables.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<style>
.nav-tabs {
	border-bottom: 2px solid #DDD;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover
	{
	border-width: 0;
}

.nav-tabs>li>a {
	border: none;
	color: #666;
}

.nav-tabs>li.active>a, .nav-tabs>li>a:hover {
	border: none;
	color: #4285F4 !important;
	background: transparent;
}

.nav-tabs>li>a::after {
	content: "";
	background: #4285F4;
	height: 2px;
	position: absolute;
	width: 100%;
	left: 0px;
	bottom: -1px;
	transition: all 250ms ease 0s;
	transform: scale(0);
}

.nav-tabs>li.active>a::after, .nav-tabs>li:hover>a::after {
	transform: scale(1);
}

.tab-nav>li>a::after {
	background: #21527d none repeat scroll 0% 0%;
	color: #fff;
}

.tab-pane {
	padding: 15px 0;
}

.tab-content {
	padding: 20px
}

.card {
	background: #FFF none repeat scroll 0% 0%;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
	margin-bottom: 30px;
}
</style>



<div class="panel-group" id="accordion8">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion8"
					href="#collapse13">Profile</a>
			</h4>
		</div>
		<div id="collapse13" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="row">



					<div class="panel-body">
						<div class="row">
							<div
								class="col-xs-6 col-sm-6 col-md-6 separator social-login-box">
								<br> <img alt="" class="img-thumbnail"
									src="https://bootdey.com/img/Content/avatar/avatar1.png">
							</div>
							<div style="margin-top: 80px;"
								class="col-xs-6 col-sm-6 col-md-6 login-box">
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-lock"></span>
										</div>
										<input class="form-control" type="password"
											placeholder="Current Password">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-log-in"></span>
										</div>
										<input class="form-control" type="password"
											placeholder="New Password">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon">
											<span class="glyphicon glyphicon-log-in"></span>
										</div>
										<input class="form-control" type="password"
											placeholder="Confirm Password">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-6"></div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								<button class="btn icon-btn-save btn-success" type="submit">
									<span class="btn-save-label"><i
										class="glyphicon glyphicon-floppy-disk"></i></span>save
								</button>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
