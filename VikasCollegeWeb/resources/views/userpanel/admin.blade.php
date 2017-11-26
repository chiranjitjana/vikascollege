<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="{{ asset('js/websoulsolutionfw/navigationbar.js') }}"></script>
<link href="{{ asset('css/jquery.dataTables.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>

<script>

		$( document ).ready(function() {
			defaultLoadFileViewForAdmin(7);
		});

		
		 function a_onClick(idClicked,maxClicked) {
			  	handleShowAndViewSideContent(idClicked,maxClicked);
			  }	


</script>
<div id="admin">
	<div class="list-group col-md-2">
		<!--  <a href="#" class="list-group-item " id="1" onclick="a_onClick(1,7)">Verify
			Requests</a> -->

		<a href="#" class="list-group-item " id="6" onclick="a_onClick(6,6)">My
			Profile</a> <a href="#" class="list-group-item " id="1"
			onclick="a_onClick(1,6)">Students</a> <a href="#"
			class="list-group-item" id="2" onclick="a_onClick(2,6)">Stafs</a> <a
			href="#" class="list-group-item " id="3" onclick="a_onClick(3,6)">Notifications</a>
		<a href="#" class="list-group-item" id="4" onclick="a_onClick(4,6)">Attendence</a>
		<a href="#" class="list-group-item" id="5" onclick="a_onClick(5,6)">Results</a>
		<!-- <a href="#" class="list-group-item" id="6" onclick="a_onClick(6,7)">Events</a> -->
	</div>

	<div class="bs-example">
		<div class="panel-group col-lg-9 ">

			<!-- my profile -->
			<div class="panel-group accordion6" id="accordion6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion6"
								href="#collapse0">My Profile</a>
						</h4>
					</div>
					<div id="collapse0" class="panel-collapse collapse in">
						<div class="panel-body">
							@include('userpanel.adminviews.myprofile')</div>
					</div>
				</div>
			</div>
			<!-- end my profile -->

			<!-- students -->
			<div class="panel-group accordion1" id="accordion1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion1"
								href="#collapse3">Create Students</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse in">
						<div class="panel-body">
							@include('userpanel.adminviews.addstudentsingle')</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion1"
								href="#collapse4">All Students</a>
						</h4>
					</div>
					<div id="collapse4" class="panel-collapse collapse">
						<div class="panel-body">@include('userpanel.adminviews.allstudent')</div>
					</div>
				</div>
			</div>

			<!-- end students -->

			<!-- staf -->
			<div class="panel-group accordion2" id="accordion2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion2"
								href="#collapse6">Create Staf</a>
						</h4>
					</div>
					<div id="collapse6" class="panel-collapse collapse in">
						<div class="panel-body">
							@include('userpanel.adminviews.addstafsingle')</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion2"
								href="#collapse8">All Staf</a>
						</h4>
					</div>
					<div id="collapse8" class="panel-collapse collapse">
						<div class="panel-body">@include('userpanel.adminviews.allstafs')</div>
					</div>
				</div>
			</div>

			<!-- end staf -->


			<!-- 	notification -->

			<div class="panel-group accordion3" id="accordion3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion3"
								href="#collapse9">Send Notification</a>
						</h4>
					</div>
					<div id="collapse9" class="panel-collapse collapse in">
						<div class="panel-body">@include('userpanel.adminviews.sendnotification')</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion3"
								href="#collapse10">All Event/News/Updates - Notification</a>
						</h4>
					</div>
					<div id="collapse10" class="panel-collapse collapse">
						<div class="panel-body">
							@include('userpanel.adminviews.allnotification')</div>
					</div>
				</div>

			</div>

			<!--end notification -->


			<!-- Attendence -->
			<div class="panel-group accordion4" id="accordion4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion4"
								href="#collapse11">Attendence</a>
						</h4>
					</div>
					<div id="collapse11" class="panel-collapse collapse in">
						<div class="panel-body">WIP</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion4"
								href="#collapse12">All Attendece</a>
						</h4>
					</div>
					<div id="collapse12" class="panel-collapse collapse">
						<div class="panel-body">WIP</div>
					</div>
				</div>

			</div>
			<!--end  Attendence -->


			<!-- Result -->
			<div class="panel-group accordion5" id="accordion5">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion5"
								href="#collapse14">Upload Result</a>
						</h4>
					</div>
					<div id="collapse14" class="panel-collapse collapse in">
						<div class="panel-body">@include('userpanel.adminviews.uploadresult')</div>
					</div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion5"
								href="#collapse15">All Results</a>
						</h4>
					</div>
					<div id="collapse15" class="panel-collapse collapse">
						<div class="panel-body">@include('userpanel.adminviews.alluploaded_results')</div>
					</div>
				</div>
			</div>


			<!-- end Result -->



			<!-- 	EVENTS -->
			<!-- <div class="panel-group accordion6" id="accordion6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion6"
								href="#collapse15">Events Create </a>
						</h4>
					</div>
					<div id="collapse15" class="panel-collapse collapse in">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur
							adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion6"
								href="#collapse16">All Events</a>
						</h4>
					</div>
					<div id="collapse16" class="panel-collapse collapse">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur
							adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</div>
					</div>
				</div> -->

			<!--<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion"
								href="#collapse16">All Attendece</a>
						</h4>
					</div>
					<div id="collapse16" class="panel-collapse collapse">
						<div class="panel-body">Lorem ipsum dolor sit amet, consectetur
							adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat.</div>
					</div>
				</div> -->

		</div>


		<!-- 	END EVENTS -->
	</div>
</div>
</div>