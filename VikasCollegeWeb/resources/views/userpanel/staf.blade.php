<style>
#container {
	position: relative;
}

#loading, #contain {
	position: absolute;
	left: 50px;
}
/* num2 will be on top of num1 */
#loading {
	z-index: 1;
}

#contain {
	z-index: 2;
}

.panel-default>.panel-heading {
	color: #333;
	background-color: #d9edf7;
	border-color: #ddd;
}
</style>

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>

		$( document ).ready(function() {

			var menu=[{title:"Profile",divID:"profile"},
				{title:"Notifications",divID:"notification"}];

			var AjaxUrl='navigation/';

			var iDS=["profile","notification"];
			
			RightContentHideAnshow(iDS,AjaxUrl,"profile");

		
	
			createLeftNavigationMenu(menu,"leftnavmenu");
			//createLeftMenuContent(menuContent,"leftmenucontain",counter);//tagret,json object
			defaultLoadFileView(2);
		});


	
		
		
	

</script>
<div id="admin">
	<div class="list-group col-md-2" id="leftnavmenu"></div>
	<div class="bs-example">
		<div class="panel-group col-lg-9 " id="leftmenucontain">
			<div id='container'>
				<div id="loading" style="z-index: 10">
					<center>
						<img alt="loading" src="{{URL::asset('img/loading.gif')}}"
							height="300" width="300">
					</center>
				</div>
				<div id='contain'>
					<div id="profile">@include('userpanel.stafviews.stafprofile')</div>
					<div id="notification">@include('userpanel.stafviews.notification')</div>
				</div>
			</div>


		</div>
	</div>
</div>