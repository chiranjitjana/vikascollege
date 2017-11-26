
<br />
<div class="row">
	<div class="col-sm-12 form-group">

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
<div class="form-group">
	<div id="years">
		<label>Select Type </label>
		<div class="radio">
			<label><input type="radio" name="post_academics" value="1">News</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="post_academics" value="2">Updates</label>
		</div>
		<div class="radio">
			<label><input type="radio" name="post_academics" value="3">Events </label>
		</div>
	</div>
</div>
<div class="form-group">
	<label>Author Name</label>
	<!--  <input type="text" placeholder="Enter Author Name" class="form-control" name="post_authorname" required> -->



</div>

<input type="submit" class="btn btn-primary" />
