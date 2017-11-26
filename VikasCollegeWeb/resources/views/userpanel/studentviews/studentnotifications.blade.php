<link href="{{ asset('css/jquery.dataTables.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">
jQuery(document).ready(function($){

	$('#example5').DataTable( {
        "pagingType": "full_numbers"
          } );

});

</script>


<div class="panel panel-default">
	<div class="panel-heading">
		<h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
				All Notification</a>
		</h4>
	</div>
	<div id="collapse2" class="panel-collapse collapse in">
		<div class="panel-body">
			
			 <table id="example5" class="display table table-responsive" cellspacing="0" >
        <thead>
            <tr>
                <th>Type</th>
                <th>Post Title</th>
                <th>Post Message</th>
                <th>Created Date</th>
                <th>Sender</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
       
        </tbody>
    </table>

		</div>
	</div>
</div>



  
