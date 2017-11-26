<link href="{{ asset('css/jquery.dataTables.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">

jQuery(document).ready(function($){

 $('#example1').DataTable( {
        "pagingType": "full_numbers"
    } );

});

</script>

<div class="panel-group" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					Add Courses</a>
			</h4>
		</div>
		<div id="collapse1" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-12 form-group">

							<label>Course Name </label> <input type="text"
								placeholder="Enter Course Name.." class="form-control"
								name="post_title" id="post_title" required>
						</div>
					</div>
					<input type="submit" class="btn btn-primary"  value="Add Course"/>
				</div>

			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					All Courses</a>
			</h4>
		</div>
		<div id="collapse2" class="panel-collapse collapse">
			<div class="panel-body">
				<table id="example1" class="display table table-responsive"
					cellspacing="0">
					<thead>
						<tr>
							<th>Course ID</th>
							<th>Course Name</th>
							<th>Course Created By</th>
							<th>Course Creation Date</th>
							<th></th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>

			</div>
		</div>
	</div>
</div>
