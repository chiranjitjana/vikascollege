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
	var id="{{$id}}";
	var JSONObject= {"id":id };
	//var jsonData = JSON.parse( JSONObject ); 
	var callback = handle;
	makeAjaxCall("http://127.0.0.1:8000/fetchStudent/{{$id}}", "GET", "json", "", callback);
	/* (url, method, dateType, data, callbackfunction */
});

function handle(dataModel)
{
	//console.log("data "+JSON.stringify(dataModel));
	//JsonUIBinder(dataModel,"stdprofile","image");
	
}


</script>



<div class="row">
	<div class="col-md-3 col-lg-3 " align="center">
		<img alt="User Pic" height="300" width="300" class="img-responsive"
			id="stdprofile" src="{{URL::asset('img/avtar.png')}}"><br />
		<input type="file" id="imgupload" style="display: none" />
		<button id="OpenImgUpload" class="btn btn-primary">Change Profile Pic</button>
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

		<a href="#" class="btn btn-primary">Change Password</a> <a href="#"
			class="btn btn-primary">Update</a>
	</div>

</div>

<script type="text/javascript">
$(document).ready(function(){

	$('#OpenImgUpload').click(function(){ $('#imgupload').trigger('click'); });
});

</script>