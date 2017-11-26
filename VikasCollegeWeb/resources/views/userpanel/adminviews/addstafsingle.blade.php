<div class="row">

	<!-- Nav tabs -->
	<div class="card">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#manual_Staff_add"
				aria-controls="manual_Staff_add" role="tab" data-toggle="tab">Manual
					Add</a></li>
			<li role="presentation"><a href="#bulk_Staff_add"
				aria-controls="bulk_Staff_add" role="tab" data-toggle="tab">Bulk Add</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="manual_Staff_add">@include('userpanel.adminviews.staf_manual_add')</div>
			<div role="tabpanel" class="tab-pane" id="bulk_Staff_add">@include('userpanel.adminviews.bulk_staf_add')</div>
		</div>
	</div>

</div>