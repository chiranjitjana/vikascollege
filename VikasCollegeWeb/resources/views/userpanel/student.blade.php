<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>


<!--Post delete and update-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet"
	href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>

		$( document ).ready(function() {
			defaultLoadFileView(4);
		});

		
		 function a_onClick(idClicked,maxClicked) {
			  	handleShowAndViewSideContent(idClicked,maxClicked);
			  	//alert(idClicked+" "+ maxClicked);
			  }	


</script>
<div id="student">
	<div class="list-group col-md-2">
		<a href="#" class="list-group-item " onclick="a_onClick(1,4)" id="1">My
			Profile</a> <a href="#" class="list-group-item"
			onclick="a_onClick(2,4)" id="2">Attendence</a> <a href="#"
			class="list-group-item " onclick="a_onClick(3,4)" id="3">Result</a> <a
			href="#" class="list-group-item" onclick="a_onClick(4,4)" id="4">Notifications</a>
	</div>

	<div class="bs-example">
		<div class="panel-group col-lg-9 ">
			<!-- Myprofile  -->
			<div class="panel-group accordion1" id="accordion1">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion1"
								href="#collapse1">My Profile</a>
						</h4>
					</div>
					<div id="collapse1" class="panel-collapse collapse in">
						<div class="panel-body">
							@include('userpanel.studentviews.studentprofile')</div>
					</div>
				</div>
			</div>
			<!--end Myprofile  -->



			<!-- Attendence -->
			<div class="panel-group accordion2" id="accordion2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion2"
								href="#collapse2">My Attendence</a>
						</h4>
					</div>
					<div id="collapse2" class="panel-collapse collapse in">
						<div class="panel-body">
							@include('userpanel.studentviews.studentattendence')</div>
					</div>
				</div>
			</div>
			<!-- end Attendence -->


			<!-- Result -->
			<div class="panel-group accordion3" id="accordion3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion3"
								href="#collapse3">My Result</a>
						</h4>
					</div>
					<div id="collapse3" class="panel-collapse collapse in">
						<div class="panel-body">
							@include('userpanel.studentviews.studentresult')</div>
					</div>
				</div>
			</div>
			<!-- end Result -->


			<!-- Notifications -->
			<div class="panel-group accordion4" id="accordion4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion4"
								href="#collapse5">Notifications</a>
						</h4>
					</div>
					<div id="collapse5" class="panel-collapse collapse in">
						<div class="panel-body">
							@include('userpanel.studentviews.studentnotifications')</div>
					</div>
				</div>


			</div>
			<!-- end Notifications -->

		</div>
	</div>
</div>

