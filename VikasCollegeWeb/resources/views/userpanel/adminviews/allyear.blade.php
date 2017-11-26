<link href="{{ asset('css/jquery.dataTables.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">

jQuery(document).ready(function($){

 $('#example3').DataTable( {
        "pagingType": "full_numbers"
    } );

});

</script>

<div class="panel-group" id="accordion3">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion3" href="#collapse5">
					Add Year</a>
			</h4>
		</div>
		<div id="collapse5" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-12 form-group">

							<label>Year Name </label> <input type="text"
								placeholder="Enter Course Name.." class="form-control"
								name="post_title" id="post_title" required>
						</div>
					</div>
					<input type="submit" class="btn btn-primary" value="Add Year"/>
				</div>

			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion3" href="#collapse6">
					All Year</a>
			</h4>
		</div>
		<div id="collapse6" class="panel-collapse collapse">
			<div class="panel-body">
				<table id="example3" class="display table table-responsive"
					cellspacing="0">
					<thead>
						<tr>
							<th>Year ID</th>
							<th>Year Name</th>
							<th>Year Created By</th>
							<th>Year Creation Date</th>
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
