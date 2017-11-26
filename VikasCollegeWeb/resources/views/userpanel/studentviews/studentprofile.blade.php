<?php $id="9863240";?>



<style>
.user-row {
	margin-bottom: 14px;
}

.user-row:last-child {
	margin-bottom: 0;
}

.dropdown-user {
	padding: 5px;
	height: 100%;
}

.dropdown-user:hover {
	cursor: pointer;
}

.table-user-information>tbody>tr {
	border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information>tbody>tr:first-child {
	border-top: 0;
}

.table-user-information>tbody>tr>td {
	border-top: 0;
}

.toppad {
	margin-top: 20px;
}
</style>

<script type="text/javascript">

jQuery(document).ready(function($){
	var _URL  = window.URL || window.webkitURL;
	var id="{{$id}}";
	var JSONObject= {"id":id };
	//var jsonData = JSON.parse( JSONObject ); 
	var callback = handle;
	makeAjaxCall("http://127.0.0.1:8000/fetchStudent/{{$id}}", "GET", "json", "", callback);
	/* (url, method, dateType, data, callbackfunction */
	
	

	$("#fileupload-example-4").change( function(event) {
	 	 var file;
	    if ((file = this.files[0])) {
	    var reader = new FileReader();
	  	  reader.onloadend = function() {
	  	  /*   $(".link").attr("href",reader.result);
	  	    $(".link").text(reader.result); */
		  	  var data={
	        		  'student_id':9863240,
	        		  'profile_pic':reader.result
	        		}
	        			            
			makeAjaxCall("http://127.0.0.1:8000/updateStudentProfilePic", "POST", "json", data, callback);
	  		
	  	  }
	  	  reader.readAsDataURL(file);		
	    }
	
	});

	
});


	
function handle(dataModel)
{
	//console.log("data "+JSON.stringify(dataModel));
	JsonUIBinder(dataModel,"stdprofile","image");
	
}



</script>



<div class="row">
	<div class="col-md-3 col-lg-3 " align="center">
		<img alt="User Pic" height="300" width="300" class="img-responsive"
			id="stdprofile"> <br /> <input type="file" id="fileupload-example-4"
			style="display: none" /> <label
			id="fileupload-example-4-label" for="fileupload-example-4"
			style="padding: 8px;" class="btn btn-primary">Change Profile Pic</label>
	</div>
	<div class=" col-md-9 col-lg-9 ">
		<table class="table table-user-information">
			<tbody>
				<tr>
					<td>College ID:</td>
					<td><input type="text" disabled="disabled" class="form-control"
						id="college_id" /></td>
				</tr>

				<tr>
					<td>Name:</td>
					<td><input type="text" disabled="disabled" class="form-control"
						id="stdname" /></td>
				</tr>

				<tr>
					<td>Stream</td>
					<td><input type="text" disabled="disabled" class="form-control"
						id="stdstream" /></td>
				</tr>

				<tr>
					<td>Class</td>
					<td><input type="text" disabled="disabled" id="stdclass"
						class="form-control" /></td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td><input type="text" disabled="disabled" id="stddob"
						class="form-control" /></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" class="form-control" id="stdemail" /></td>
				</tr>

				<tr>
					<td>Mobile Number</td>
					<td><input type="text" class="form-control" id="stdmobile" /></td>
				</tr>

			</tbody>
		</table>
		<button type="button" class="btn btn-primary" data-toggle="modal"
			data-target="#changePassword">Change Password</button>
		<a href="#" class="btn btn-primary">Update</a>

		<!-- Modal -->
		<div class="modal fade" id="changePassword" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Change Password</h4>
					</div>
					<div class="modal-body">
						<table class="table table-user-information">
							<tr>
								<td>Old Password</td>
								<td><input type="password" class="form-control" id="oldPass" /></td>
							</tr>
							<tr>
								<td>New Password</td>
								<td><input type="password" class="form-control" id="newPass" /></td>
							</tr>
							<tr>
								<td>Confirm Password</td>
								<td><input type="password" class="form-control" id="cnfPass" /></td>
							</tr>
							<tr>
								<td colspan="2">
									<center>
										<button type="button" class="btn btn-primary" id="changePass">Change
											Password</button>
									</center>
								</td>
							</tr>
						</table>
					</div>
				</div>

			</div>
		</div>

	</div>

</div>
