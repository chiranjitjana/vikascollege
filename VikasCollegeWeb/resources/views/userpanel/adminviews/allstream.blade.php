<link href="{{ asset('css/jquery.dataTables.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">

jQuery(document).ready(function($){

 $('#example2').DataTable( {
        "pagingType": "full_numbers"
    } );

});

</script>

<div class="panel-group" id="accordion2">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion2" href="#collapse3">
					Add Stream</a>
			</h4>
		</div>
		<div id="collapse3" class="panel-collapse collapse in">
			<div class="panel-body">
				<div class="col-sm-9">
					<div class="row">
						<div class="col-sm-12 form-group">

							<label>Stream Name </label> <input type="text"
								placeholder="Enter Course Name.." class="form-control"
								name="post_title" id="post_title" required>
						</div>
					</div>
					<input type="submit" class="btn btn-primary"  value="Add Stream"/>
				</div>

			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion2" href="#collapse4">
					All Stream</a>
			</h4>
		</div>
		<div id="collapse4" class="panel-collapse collapse">
			<div class="panel-body">
				<table id="example2" class="display table table-responsive"
					cellspacing="0">
					<thead>
						<tr>
							<th>Stream ID</th>
							<th>Stream Name</th>
							<th>Stream Created By</th>
							<th>Stream Creation Date</th>
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
