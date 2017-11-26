
<script>
$.noConflict();
jQuery( document ).ready(function( $ ) {
  // Code that uses jQuery's $ can follow here.
   $( "#from_datepicker" ).datepicker();
   $( "#to_datepicker" ).datepicker();
   hideByDefaultIfTypeNotSelected(2);
});

  </script>
<link rel="stylesheet"
	href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">

<script type="text/javascript"
	src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
		
      function changeEventHandler(event,totalCount,msg) {
       // alert('You like ' + event.target.value + ' ice cream.');

       if(event.target.value!="-1"){
    	   for(var x=1;x<=totalCount;x++)
	       	{
   	       		if(x==(event.target.value))
	           	$("#div"+x).show();
   	       		else
   	       		$("#div"+x).hide();
	       	}

        }
        else
        {
        	hideByDefaultIfTypeNotSelected(totalCount);
          	$("#title").text(msg);
          	$("#contenttoshow").text(msg);
        	$("#myModal").modal();
         
        }
      }


    function hideByDefaultIfTypeNotSelected(totalCount){
    	for(var x=1;x<=totalCount;x++)
    	{
        	$("#div"+x).hide();
    	}
    }


</script>







<p id="msg"></p>


<select class="form-control" id="type"
	onchange="changeEventHandler(event,2,'Please Select Attendence Search Type');">
	<option value="-1">Select Attendence Search Type</option>
	<option value="1">Search By From Date - To Date</option>
	<option value="2">Search By Number of Past Days</option>
</select>


<div id="div1">
	<br />
	<div class="col-sm-4 form-group">
		<label>From Date</label>
		<div class="form-group">
			<div class='input-group date'>
				<input type='text' id="from_datepicker" class="form-control"
					placeholder="Open Calendar" name="from_date" id="from_date"
					required />
			</div>
		</div>
	</div>

	<div class="col-sm-4 form-group">
		<label>To Date</label>
		<div class="form-group">
			<div class='input-group date'>
				<input type='text' id="to_datepicker" class="form-control"
					placeholder="Open Calendar" name="to_date" id="to_date" required />
			</div>
		</div>
	</div>
	<div class="col-sm-4 form-group">
		<br />
		<button type="button" class="btn btn-info">
			<span class="glyphicon glyphicon-search"></span> Search
		</button>
	</div>

</div>

<br>
<div id="div2">
	<div class="col-sm-8 form-group">
		<select class="form-control" id="type"
			onchange="changeEventHandler(event,2,'Please Select Attendence Search Type');">
			<option value="-1">Select</option>
			<option value="1">Search for Last week</option>
			<option value="2">Search for Last 15 days</option>
			<option value="3">Search for Last 1 month</option>
			<option value="4">Search for Last last 3 months</option>
		</select>
	</div>
	<div class="col-sm-4 form-group">
		<button type="button" class="btn btn-info">
			<span class="glyphicon glyphicon-search"></span> Search
		</button>
	</div>
</div>


<br>
<br>





<table id="attendence" class="display table table-responsive"
	cellspacing="0">
	<thead>
		<tr>
			<th>Date</th>
			<th>Status</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>


	</tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">
					<span id="title"></span>
				</h4>
			</div>
			<div class="modal-body">
				<p>
					<span id="contenttoshow"></span>
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
$.noConflict();
jQuery(document).ready(function($){

	var table=$('#attendence').DataTable( {
	       "pagingType": "full_numbers",
	   } );
	
});

</script>
