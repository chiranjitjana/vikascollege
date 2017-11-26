<script>

$(document).ready(function() {

	$("#notification_selection_div").children().hide(); 
	 $("#divalluser").show();

	
    $("#submenu button").click(function(event){
    		/* alert(event.target.id); */
    		$("#submenu").find(":button").removeClass( "btn-primary" );
    		$("#submenu").find(":button").addClass( "btn-default" );

    		$("#notification_selection_div").children().hide(); 
    		 $("#div"+event.target.id).show();

    		 console.log("#div"+event.target.id);
    		/* $("#notification_selection_div").find("#div"+event.target.id).show(); */

        	
	    	$("#"+event.target.id).removeClass("btn-default");
	    	$("#"+event.target.id).addClass("btn-primary");
    }); 



    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
   
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
     
            $(wrapper).append('<div><tr><td><input type="text" name="mytext[]"  class="form-control col-sm-6"   placeholder="Enter College Id"/></td><td><a href="#" class="remove_field">Remove</a></td><tr></div>'); //add input box
        
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
    
});




</script>



<div class="col-sm-12 form-group">
	<br />
	<div class="row" id="submenu">
		<button type="button" class="btn btn-primary" id="alluser">All User</button>
		<button type="button" class="btn btn-default" id="allclass">Send By
			Class</button>
		<button type="button" class="btn btn-default" id="allcourse">Send By
			Course</button>
		<button type="button" class="btn btn-default" id="allstream">Send By
			Stream</button>
		<button type="button" class="btn btn-default" id="allyear">Send By
			Year</button>
		<button type="button" class="btn btn-default" id="allcollegeid">Send
			By College ID</button>
	</div>
	<br />
	<div class="row" id="notification_selection_div">

		<div id="divalluser"></div>

		<div id="divallclass" class="form-group">
			<select class="form-control">
				<option value="-1">Select Class</option>
				<option value="1">FyBsc(IT)</option>
				<option value="2">SY-Bsc(CS)</option>
				<option value="3">Fy-Bcom</option>
			</select>
		</div>
		<div id="divallcourse" class="form-group">
			<select class="form-control">
				<option value="-1">Select Course</option>
				<option value="1">Bsc(IT)</option>
				<option value="2">Bsc(CS)</option>
				<option value="3">Bcom</option>
			</select>
		</div>
		<div id="divallstream">
			<select class="form-control">
				<option value="-1">Select Stream</option>
				<option value="1">IT</option>
				<option value="2">CS</option>
				<option value="3">Com</option>
			</select>
		</div>
		<div id="divallyear">
			<select class="form-control">
				<option value="-1">Select Year</option>
				<option value="1">Fy</option>
				<option value="2">Sy</option>
				<option value="3">Ty</option>
			</select>
		</div>
		<div id="divallcollegeid">


			<table>
				<tr>
					<td style="width: 100%"><input type="text" name="mytext[]"
						placeholder="Enter College Id" class="form-control"
						style="width: 100%"></td>
					<td><button class="add_field_button btn btn-primary">Add</button></td>
				</tr>
				<div class="input_fields_wrap">
			
			</table>




		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<label>Title</label> <input type="text"
				placeholder="Enter Title Here.." class="form-control"
				name="post_title" id="post_title" required>
		</div>
	</div>
	<div class="form-group">
		<label> Content</label>
		<textarea placeholder="Enter Content Here.." rows="3"
			class="form-control" style="resize: none;" name="post_content"
			id="post_content" required></textarea>
	</div>
	<div class="row">
		<div class="col-sm-12 form-group">
			<label>Select Image </label> <input type="file" class="filestyle"
				style="height: 30px" name="post_image" id="post_image" required>
		</div>



	</div>
	<div class="row">
		<div class="col-sm-12 form-group">
			<label>Select Start Date</label>
			<div class="form-group">
				<div class='input-group date'>
					<input type='date' class="form-control" placeholder="Open Calendar"
						name="post_date" id="post_date" required /> </span>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12 form-group">
			<label>Select End Date</label>
			<div class="form-group">
				<div class='input-group date'>
					<input type='date' class="form-control" placeholder="Open Calendar"
						name="post_date" id="post_date" required /> </span>
				</div>
			</div>
		</div>
	</div>

	<input type="button" class="btn btn-primary" value="Send">
</div>
