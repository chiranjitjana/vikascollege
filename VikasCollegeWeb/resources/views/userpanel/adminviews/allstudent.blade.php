
<script type="text/javascript">
jQuery(document).ready(function($){
 $('#example6').DataTable( {
        "pagingType": "full_numbers"
    } );

});
</script>
<style>
.nav-tabs {
	border-bottom: 2px solid #DDD;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover
	{
	border-width: 0;
}

.nav-tabs>li>a {
	border: none;
	color: #666;
}

.nav-tabs>li.active>a, .nav-tabs>li>a:hover {
	border: none;
	color: #4285F4 !important;
	background: transparent;
}

.nav-tabs>li>a::after {
	content: "";
	background: #4285F4;
	height: 2px;
	position: absolute;
	width: 100%;
	left: 0px;
	bottom: -1px;
	transition: all 250ms ease 0s;
	transform: scale(0);
}

.nav-tabs>li.active>a::after, .nav-tabs>li:hover>a::after {
	transform: scale(1);
}

.tab-nav>li>a::after {
	background: #21527d none repeat scroll 0% 0%;
	color: #fff;
}

.tab-pane {
	padding: 15px 0;
}

.tab-content {
	padding: 20px
}

.card {
	background: #FFF none repeat scroll 0% 0%;
	box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
	margin-bottom: 30px;
}
</style>




<table id="example6" class="display table table-responsive"
	cellspacing="0">
	<thead>
		<tr>
			<th>Student ID</th>
			<th>Student Name</th>
			<th>Student Created By</th>
			<th>Student Creation Date</th>
			<th>Status</th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>

	</tbody>
</table>


