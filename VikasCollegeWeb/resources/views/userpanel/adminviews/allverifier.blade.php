<link href="{{ asset('css/jquery.dataTables.min.css') }}"
	rel="stylesheet">
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript">

jQuery(document).ready(function($){

 $('#example4').DataTable( {
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



<div class="panel-group" id="accordion5">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion5"
					href="#collapse7"> Add Verifier</a>
			</h4>
		</div>
		<div id="collapse7" class="panel-collapse collapse in">
			<div class="panel-body">

				<div class="row">
					<div class="col-md-6">
						<!-- Nav tabs -->
						<div class="card">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a
									href="#manual_verifier_add" aria-controls="manual_verifier_add"
									role="tab" data-toggle="tab">Manual Add</a></li>
								<li role="presentation"><a href="#bulk_verifier_add"
									aria-controls="bulk_verifier_add" role="tab" data-toggle="tab">Bulk
										Add</a></li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active"
									id="manual_verifier_add">@include('userpanel.adminviews.verifier_manual_add')</div>
								<div role="tabpanel" class="tab-pane" id="bulk_verifier_add">@include('userpanel.adminviews.bulk_verifier_add')</div>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion5"
					href="#collapse8"> All Verifiers</a>
			</h4>
		</div>
		<div id="collapse8" class="panel-collapse collapse">
			<div class="panel-body">
				<table id="example4" class="display table table-responsive"
					cellspacing="0">
					<thead>
						<tr>
							<th>Verifier ID</th>
							<th>Verifier Name</th>
							<th>Year Created By</th>
							<th>Year Creation Date</th>
							<th>Status</th>
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
