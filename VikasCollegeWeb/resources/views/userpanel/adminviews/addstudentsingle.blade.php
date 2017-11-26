<div class="row">

	<!-- Nav tabs -->
	<div class="card">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#manual_student_add"
				aria-controls="manual_student_add" role="tab" data-toggle="tab">Manual
					Add</a></li>
			<li role="presentation"><a href="#bulk_studennt_add"
				aria-controls="bulk_studennt_add" role="tab" data-toggle="tab">Bulk Add</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="manual_student_add">@include('userpanel.adminviews.student_manual_add')</div>
			<div role="tabpanel" class="tab-pane" id="bulk_studennt_add">@include('userpanel.adminviews.bulk_student_add')</div>
		</div>
	</div>

</div>
