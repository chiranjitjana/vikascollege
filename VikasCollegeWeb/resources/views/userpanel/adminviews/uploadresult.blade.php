<div class="col-md-9 col-lg-9 ">
	<div class="form-group">
		<input type="file" name="img[]" class="file" style="visibility: hidden;">
		<div class="input-group col-xs-8">
			<span class="input-group-addon"><i
				class="glyphicon  glyphicon-file"></i></span> <input type="text"
				class="form-control input-sm" disabled placeholder="Upload Result"> <span
				class="input-group-btn">
				<button class="browse btn btn-primary input-sm" type="button" id="uploadResult">
					<i class="glyphicon glyphicon-search"></i> Browse
				</button>
			</span>
		</div>
	</div>
	<div class="form-group">
		<a href="{{ asset('template/result_template.csv') }}">Download Result Template</a>
	</div>
</div>
<style>

.btn.btn-primary {
	background-color: $purple;
	border-color: $purple;
	outline: none; &: hover { background-color : darken( $ purple, 10%);
	border-color: darken($ purple, 10%);
}

&
:active, &:focus {
	background-color: lighten($ purple, 5%);
	border-color: lighten($ purple, 5%);
}
}
</style>

<script>
$(document).on('click', '.browse', function(){
	  var file = $(this).parent().parent().parent().find('.file');
	  file.trigger('click');
	});
	$(document).on('change', '.file', function(){
	  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
	});
</script>